var data_raw = new Object();
var data_send = new Object();
var number = 0; // number now of question
request = $.ajax({
    url: "process.php",
    type: 'post',
    data: {request : 'all', uid : '1'},
    dataType: 'json'
});

// Callback handler that will be called on success
request.done(function (response, textStatus, jqXHR){
    data_raw = response;
    var data = data_raw.data;  // data for use
    var data_length = 10; // length of data
    data_send = {"id" : data_raw.q_id,"data" : []}; // data for sending with set of question id

    $(document).ready(function (){
        
        updateq(data, number); // update first question
        // check if button is clicked
        $('button').on('click', function() {
            if (number > data_length-1) { // check if question end
                return; // do nothing
            }
            number++; // increment number
            var data_click = {
                "id" : number,
                "data" : $(this).text()
            };
            data_send.data.push(data_click);
            updateq(data, number); // update question
        });
    });

    // function for update question and choices
    function updateq(data, id) {
        const question = $('div#header > div'); // question element
        $(question[0]).text(data[id].number1); // question first number
        $(question[1]).text(data[id].operator); // question operator
        $(question[2]).text(data[id].number2); // question last number
        //console.log(question);
        const choice = $('div#choice_box > button'); // button element
        for (let i = 0; i < choice.length; i++) { // loop for change choice data
            if ($(choice[i]).attr('id') == i) { // check choice id and data id
                $(choice[i]).text(data[id].choice[i].qc_number); // change choice data
            }
        }
        $('div#progress_bar > div').css("width",((number+1)*(100/(data_length)))+'%'); // update progress bar
    }

    // time counter
    var totalSeconds = 0; // total number of seconds
    setInterval(setTime, 1000); // set time counter

    // function for time counter
    function setTime() {
    ++totalSeconds; // increment time counter
    }

});
