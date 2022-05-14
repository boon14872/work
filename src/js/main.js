var data = [
    {
        "id": "1",
        "text":"เวลาให้นมลูกมีอาการปวด บวม ของเต้านมบ้างส่วน ซึ่งอาจเกิดจาก อุดตันของท่อน้ำนม โดยทำให้เต้านมอักเสบได้",
        "image":true,
        "image_path": "lg1.png",
        "choices_image":true,
        "choices": [
            {
                "id": 1,
                "text": "1",
                "image":"lg1.png"
            },
            {
                "id": 2,
                "text": "2",
                "image":"lg1.png"
            },
            {
                "id": 3,
                "text": "3",
                "image":"lg1.png"
            },
            {
                "id": 4,
                "text": "4",
                "image":"lg1.png"
            },
        ]
    },
    {
        "id": "2",
        "text":"how old are you?",
        "image":false,
        "image_path": "",
        "choices_image":false,
        "choices": [
            {
                "id": 1,
                "text": "1",
                "image":""
            },
            {
                "id": 2,
                "text": "2",
                "image":""
            },
            {
                "id": 3,
                "text": "3",
                "image":""
            },
            {
                "id": 4,
                "text": "4",
                "image":""
            },
        ]
    }
];


var user_data = [];

function showdata(data) {
    for (var i = 0; i < data.length; i++) {
        console.log(data[i].id);
        console.log(data[i].text);
        for (var j = 0; j < data[i].choices.length; j++) {
            console.log(data[i].choices[j].id);
            console.log(data[i].choices[j].text);
        }
    }
}

function updateQuestion(data, i) {
    //for (var i = 0; i < data.length; i++) {
        $('#questions > div:first').html("คำถามที่ "+data[i].id+":");
        $('#questions > div:last').html(`<div class="row" id="`+data[i].id+`">`+data[i].text+`</div>`);
        if (data[i].image == true) {
            $('#questions > div:last').append(`<div class="row justify-content-center text-center p-2"><img src="src/images/lg1.png" width="15%"></div>`)
        }
        //console.log(data[i].id);boot
        //console.log(data[i].text);

        // clear choices
        var checked = null;
        $('#choices_box').empty();
        if (user_data[i] != null) {
            checked = parseInt(user_data[i])-1;
        }
        // add choices
        for (var j = 0; j < data[i].choices.length; j++) {
            //console.log(data[i].choices[j].id);
            //console.log(data[i].choices[j].text);
            var check = checked == j ? "active" : "";

            // check if have image
            if (data[i].choices_image == true) {
                var choice = `
                <label class="btn btn-sm col-5 m-3 p-2 shadow-sm btn-c-topup btn-light `+check+`" id="`+data[i].choices[j].id+`">
                <input type="radio" name="`+data[i].choices[j].id+`" id="`+data[i].choices[j].id+`" autocomplete="off"
                value="" required > `+data[i].choices[j].text+`
                <div class="row justify-content-center text-center p-2" id="`+data[i].choices[j].id+`"><img src="src/images/lg1.png" width="15%" id="`+data[i].choices[j].id+`"></div>
                </label>`;
            }
            else {
                var choice = `
                <label class="btn btn-sm col-5 m-3 p-2 shadow-sm btn-c-topup btn-light `+check+`" id="`+data[i].choices[j].id+`">
                <input type="radio" name="`+data[i].choices[j].id+`" id="`+data[i].choices[j].id+`" autocomplete="off"
                value="" required> `+data[i].choices[j].text+`
                </label>`;
            }
            
            $('#choices_box').append(choice);
            
        }
        // end add choices

        // check user click
        $('div#choices_box').children().click(function (e) {
            var choice = e.target.id;
            var questions = $('#questions > div:last').children().attr('id')-1;
            user_data[questions] = choice;
            console.log(choice);
            //console.log(questions);
        })
    //}

}


function SetValues(qid, choice) {
    user_data[qid] = choice;
    return user_data;
}


$(document).ready(function (){
    updateQuestion(data, 0);
});