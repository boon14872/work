var data_raw = [{
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
    {
        "id": "1",
        "first": "111",
        "operator": "+",
        "last":"222",
        "choices": [
            {
                "id": "0",
                "text": "21",
            },
            {
                "id": "1",
                "text": "22",
            },
            {
                "id": "2",
                "text": "23",
            },
            {
                "id": "3",
                "text": "24",
            }
        ]
    },
    {
        "id": "2",
        "first": "500",
        "operator": "+",
        "last":"222",
        "choices": [
            {
                "id": "0",
                "text": "11",
            },
            {
                "id": "1",
                "text": "112",
            },
            {
                "id": "2",
                "text": "113",
            },
            {
                "id": "3",
                "text": "144",
            }
        ]
    },
    {
        "id": "3",
        "first": "444",
        "operator": "+",
        "last":"222",
        "choices": [
            {
                "id": "0",
                "text": "111",
            },
            {
                "id": "1",
                "text": "22",
            },
            {
                "id": "2",
                "text": "0",
            },
            {
                "id": "3",
                "text": "44",
            }
        ]
    },
]}];

var data = data_raw[0].data;  // data for use
var data_length = data.length; // length of data
var number = 0; // number now of question

$(document).ready(function (){
    updateq(data, number); // update first question
    // check if button is clicked
    $('button').on('click', function() {
        if (number >= data_length-1) { // check if question end
            return; // do nothing
        }
        number++; // increment number
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
        if ($(choice[i]).attr('id') == i && data[id].choices[i].id == i) { // check choice id and data id
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
