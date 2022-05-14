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
        $('#questions > div:first').html("คำถามที่ "+data[i].id+1+":");
        $('#questions > div:last').html(`<div class="row">`+data[i].text+`</div>`);
        if (data[i].image == true) {
            $('#questions > div:last').append(`<div class="row justify-content-center text-center p-2"><img src="src/images/lg1.png" width="15%"></div>`)
        }
        //console.log(data[i].id);boot
        //console.log(data[i].text);
        $('#choices_box').empty();
        for (var j = 0; j < data[i].choices.length; j++) {
            //console.log(data[i].choices[j].id);
            //console.log(data[i].choices[j].text);
            if (data[i].choices_image == true) {
                var choice = `
                <input type="radio" class="btn-check" name="options" id="`+data[i].id+`" autocomplete="off">
                <label class="col-lg-5 btn btn-secondary p-2 text_form mx-4 my-2 text-justify break-text text-center" for="option2">
                    <div class="" id="choice" value="">`+data[i].choices[j].text+`</div>
                    <div class="row justify-content-center text-center p-2"><img src="src/images/lg1.png" width="15%"></div>
                </label>`;
            }
            else {
                var choice = `
                <input type="radio" class="btn-check" name="options" id="`+data[i].id+`" autocomplete="off">
                <label class="btn btn-secondary" for="option2">
                    <div class="col-lg-5 btn btn-secondary p-2 text_form mx-4 my-2 text-justify break-text text-center" id="choice" value="">`+data[i].choices[j].text+`</div>
                </label>`;
            }
            
            $('#choices_box').append(choice);
        }
    //}

}


function SetValues(qid, choice) {
    var data = [];
    data[qid] = choice;
    return data;
}


function choice_selected(element) {

}