var data_raw = [{
    "header": "ohayo",
    "data" : [
    {
        "id": "1",
        "text":"1+1",
        "choices": [
            {
                "id": 1,
                "text": "1",
            },
            {
                "id": 2,
                "text": "2",
            },
            {
                "id": 3,
                "text": "3",
            },
            {
                "id": 4,
                "text": "4",
            }
        ]
    },
    {
        "id": "2",
        "text":"1+1",
        "choices": [
            {
                "id": 1,
                "text": "1",
            },
            {
                "id": 2,
                "text": "2",
            },
            {
                "id": 3,
                "text": "3",
            },
            {
                "id": 4,
                "text": "4",
            }
        ]
    },
    {
        "id": "3",
        "text":"1+1",
        "choices": [
            {
                "id": 1,
                "text": "1",
            },
            {
                "id": 2,
                "text": "2",
            },
            {
                "id": 3,
                "text": "3",
            },
            {
                "id": 4,
                "text": "4",
            }
        ]
    }
]}];


function check_answer( element, answer) {
    
}
/** 
var user_data = [];
var q = 0;
var data_length = parseInt(data.length);

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
    if (i > data_length-1) {
        q = data_length-1;
        return false;
    }
    else if (i < 0) {
        q = 0;
        return false;
    }
    else {
        $('#questions > div:last').html(`<div class="row justify-content-center text-center" id="`+data[i].id+`">`+data[i].text+`</div>`);

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

            var choice = `
            <label class="btn btn-sm col-lg-3 mx-5 my-2 p-2 shadow-sm btn-light fs-3 `+check+`" id="`+data[i].choices[j].id+`">
            <input type="radio" name="`+data[i].choices[j].id+`" id="`+data[i].choices[j].id+`" autocomplete="off"
            value="" required> `+data[i].choices[j].text+`
            </label>`;
            
            $('#choices_box').append(choice);
            
        }
        // end add choices

        
    //}
    GenPagination(data_length);
    }
}

function GenPagination(length) {
    var disaled_next = q == length-1 ? "disabled" : "";
    var disaled_prev = q == 0 ? "disabled" : "";
    var pageination_prev = `
                <li class="page-item `+disaled_prev+`" id="-1">
                <span class="page-link">ก่อนหน้า</span>
                </li>`;
    var pageination_next = `
                <li class="page-item `+disaled_next+`" id="+1">
                <p class="page-link">ถัดไป</p>
                </li>`;
    var pageination_number = "";
    for (var i = 0; i < length; i++) {
        var number = i+1;
        var active = i == q ? "active" : "";
        var element = `
            <li class="page-item `+active+`" id="`+number+`">
            <span class="page-link">
                `+number+`
            </span>
            </li>
            `;
        pageination_number+= element;
    }
    var e = $('nav > ul.pagination');
    var pagecombine = pageination_prev+pageination_number+pageination_next;
    if (q == data_length-1) {
        pagecombine += `
        <li class="page-item ml-3" id="+1">
        <p class="page-link bg-warning text-white shadow-sm active p-2">ประเมิณผล</p>
        </li>`;
    }
    e.empty();
    e.append(pagecombine);
    $('div#choices_box').children().click(function (e) {
        var choice = e.target.id;
        user_data[q] = choice;
        //console.log(choice);
        //console.log(q);
        q += 1;
        updateQuestion(data, q);
    });
    $('nav > ul.pagination > li.page-item').on('click', function (e) {
        var page = e.currentTarget.id.toString();
        if (page == "-1") q = q-1;
        else if (page == "+1") q = q+1;
        else q = parseInt(page)-1;
        updateQuestion(data, q);
        //console.log(e.currentTarget.id);
    });
}
**/
$(document).ready(function (){

});

