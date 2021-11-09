$(function() {
    $(".header").load("header.html");
    $(".main").load("home.html");
    // $(".footer").load("footer.html");
});

function clickNavHome() {
    $(".main").load("home.html");
    buildTable();
}


function clickViewListCourse() {
    $(".main").load("viewlistCourse.html");
    buildTable();
}

function clickNavViewListWord() {
    $(".main").load("viewlistWord.html");
    buildTable();
}

function buildTable() {
    $('tbody').empty();
    getListWords();
}

var words = [];

function Word(id, tiengnhat, tiengviet) {
    this.id = id;
    this.tiengnhat = tiengnhat;
    this.tiengviet = tiengviet;
}

function getListWords() {
    $.get("https://615eaa203d1491001755aa39.mockapi.io/bunpos", function(data, status) {

        words = [];

        // error
        if (status == "error") {
            // TODO
            alert("Error when loading data");
            return;
        }

        // success
        parseData(data);
        fillWordToTable();
    });
}

function parseData(data) {
    data.forEach(function(item) {
        words.push(new Word(item.id, item.tiengnhat, item.tiengviet));
    });
}

function fillWordToTable() {
    words.forEach(function(item) {
        $('tbody').append(
            '<tr>' +
            '<td>' + item.tiengnhat + '</td>' +
            '<td>' + item.tiengviet + '</td>' +
            // '<td>' + item.y_nghia + '</td>' +
            '<td>' +
            '<a class="edit" title="Edit" data-toggle="tooltip" onclick="openUpdateModal(' + item.id + ')"><i class="material-icons">&#xE254;</i></a>' +
            '<a class="delete" title="Delete" data-toggle="tooltip" onClick="openConfirmDelete(' + item.id + ')"><i class="material-icons">&#xE872;</i></a>' +
            '</td>' +
            '</tr>')
    });
}

function buildTable() {
    $('tbody').empty();
    getListWords();
}

function openAddModal() {
    resetForm();
    openModal();
}

function resetForm() {
    document.getElementById("id").value = "";
    document.getElementById("word").value = "";
    document.getElementById("vietnamese").value = "";
}

function openModal() {
    $('#myModal').modal('show');
}

function hideModal() {
    $('#myModal').modal('hide');
}

function addWord() {

    // get data
    var word = document.getElementById("word").value;
    var vietnamese = document.getElementById("vietnamese").value;
    // TODO validate
    // then fail validate ==> return;

    var listword = {
        tiengnhat: word,
        tiengviet: vietnamese,
    };

    $.post("https://615eaa203d1491001755aa39.mockapi.io/bunpos", listword,
        function(data, status) {
            // error
            if (status == "error") {
                alert("Error when loading data");
                return;
            }

            // success
            hideModal();
            showSuccessAlert();
            buildTable();
        });
}

function openUpdateModal(id) {

    var index = words.findIndex(x => x.id == id);

    // fill data
    document.getElementById("id").value = words[index].id;
    document.getElementById("word").value = words[index].tiengnhat;
    document.getElementById("vietnamese").value = words[index].tiengviet;

    openModal();
}

function save() {
    var id = document.getElementById("id").value;

    if (id == null || id == "") {
        addWord();
    } else {
        updateWord();
    }
}

function updateWord() {
    var id = document.getElementById("id").value;
    var word = document.getElementById("word").value;
    var vietnamese = document.getElementById("vietnamese").value;

    // TODO validate
    // then fail validate ==> return;

    var listword = {
        tiengnhat: word,
        tiengviet: vietnamese,
    };

    $.ajax({
        url: 'https://615eaa203d1491001755aa39.mockapi.io/bunpos/' + id,
        type: 'PUT',
        data: listword,
        success: function(result) {
            // error
            if (result == undefined || result == null) {
                alert("Error when loading data");
                return;
            }

            // success
            hideModal();
            showSuccessAlert();
            buildTable();
        }
    });
}

function openConfirmDelete(id) {
    var index = words.findIndex(x => x.id == id);
    var word = words[index].tiengnhat;

    var result = confirm("Want to delete " + word + "?");
    if (result) {
        deleteEmployee(id);
    }
}

function deleteEmployee(id) {
    // TODO validate

    $.ajax({
        url: 'https://615eaa203d1491001755aa39.mockapi.io/bunpos/' + id,
        type: 'DELETE',
        success: function(result) {
            // error
            if (result == undefined || result == null) {
                alert("Error when loading data");
                return;
            }

            // success
            showSuccessAlert();
            buildTable();
        }
    });
}

function showSuccessAlert() {
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
        $("#success-alert").slideUp(500);
    });
}