var data_raw = {
    "id" : "0",
    "header": "plus",
    "data" : [
    {
        "id": "0",
        "first": "100",
        "operator": "+",
        "last":"200",
        "choices": [
            {
                "id": "0",
                "text": "1",
            },
            {
                "id": "1",
                "text": "2",
            },
            {
                "id": "2",
                "text": "3",
            },
            {
                "id": "3",
                "text": "4",
            }
        ]
    },

]};

var data = data_raw.data;  // data for use
var data_length = data.length; // length of data
var number = 0; // number now of question
var data_send = {"id" : data_raw.id,"data" : []}; // data for sending with set of question id

$(document).ready(function (){
    updateq(data, number); // update first question
    // check if button is clicked
    $('button').on('click', function() {
        if (number >= data_length-1) { // check if question end
            return; // do nothing
        }
        number++; // increment number
        var data_click = {
            "id" : number,
            "data" : this.id
        };
        data_send.data.push(data_click);
        updateq(data, number); // update question
    });
});

// function for update question and choices
function updateq(data, id) {
    const question = $('div#header > div'); // question element
    $(question[0]).text(data[id].first); // question first number
    $(question[1]).text(data[id].operator); // question operator
    $(question[2]).text(data[id].last); // question last number
    //console.log(question);
    const choice = $('div#choice_box > button'); // button element
    for (let i = 0; i < choice.length; i++) { // loop for change choice data
        if ($(choice[i]).attr('id') == i) { // check choice id and data id
            $(choice[i]).text(data[id].choices[i].text); // change choice data
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
