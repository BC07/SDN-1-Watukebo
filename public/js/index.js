// Hamburger Menu
const element = document.querySelector('.hamburger');
const navList = document.querySelector('.nav-list');

element.addEventListener('click', () => {
    element.classList.toggle('active');
    navList.classList.toggle('active');
})

// Search Bar Animation
const searchBtn = document.querySelector('.search-btn');
const cencelBtn = document.querySelector('.cencel-btn');
const searchBox = document.querySelector('.search-box input');
const boxBtn = document.querySelector('.search-box .search-btn');
const boxCencel = document.querySelector('.search-box .cencel-btn');
const searchInput = document.querySelector('input');

searchBtn.addEventListener('click', () => {
    searchBox.classList.add('active');
    boxBtn.classList.add('active');
    boxCencel.classList.add('active');
    cencelBtn.classList.add('active');
    
    let value = searchInput.value;
    if(value){
        console.log(value);
    }
})

cencelBtn.addEventListener('click', () => {
    searchBox.classList.remove('active');
    boxBtn.classList.remove('active');
    boxCencel.classList.remove('active');
    cencelBtn.classList.remove('active');
    searchInput.value = "";
})


// Dark Mode
let darkMode = localStorage.getItem("darkMode");

const darkModeActive = () => {
    document.querySelector(".btn-background").classList.add("color")
    document.querySelector(".home-button").classList.add("color")
    document.querySelector("main").classList.add("color")
    // document.querySelector(".intro").classList.add("color")
    document.querySelector(".category-color").classList.add("color")
    document.querySelector(".popular-color").classList.add("color")
    document.querySelector(".popular-search-btn").classList.add("color")


    document.querySelector(".btn-face").classList.add("move")
    document.querySelector(".btn-eye-left  ").classList.add("close")
    document.querySelector(".btn-eye-right").classList.add("close")
    document.querySelector(".btn-mouth").classList.add("close")
}

const darkModeInActive = () => {
    document.querySelector(".btn-background").classList.remove("color")
    document.querySelector(".home-button").classList.remove("color")
    document.querySelector("main").classList.remove("color")
    // document.querySelector(".intro").classList.remove("color")
    document.querySelector(".category-color").classList.remove("color")
    document.querySelector(".popular-color").classList.remove("color")
    document.querySelector(".popular-search-btn").classList.remove("color")


    document.querySelector(".btn-face").classList.remove("move")
    document.querySelector(".btn-eye-left  ").classList.remove("close")
    document.querySelector(".btn-eye-right").classList.remove("close")
    document.querySelector(".btn-mouth").classList.remove("close")
}

const enableDarkMode = () => {
    darkModeActive();

    localStorage.setItem("darkMode", "enabled");
}

const disableDarkMode = () => {
    darkModeInActive();

    localStorage.setItem("darkMode", "disabled");
}

if (darkMode === "enabled") {
    enableDarkMode();
}

document.querySelector(".btn-background").addEventListener("click", () => {
    darkMode = localStorage.getItem("darkMode");

    if (darkMode !== "enabled") {
        enableDarkMode();

        console.log(darkMode)
    } else {
        disableDarkMode();

        console.log(darkMode)
    }
})


// List Using JQuery And Ajax

$(document).ready(function() {

    // Show Task
    function loadTask() {
        $.ajax({
            url: "./showTask.php",
            type: "POST",
            success: function(data) {
                $("tbody").html(data);
            }
        })
    }

    loadTask();

    // Show how many task that still exist
    function loadRecord() {
        $.ajax({
            url: "./showRecord.php",
            type: "POST",
            success: function(data) {
                $("#record").html(data);
            }
        })
    }

    loadRecord();

    // Add Task
    $("#add-btn").on("click", function(e) {
        e.preventDefault();

        var task = $("#taskValue").val();

        $.ajax({    
            url: "./addTask.php",
            type: "POST",
            data: {task: task},
            success: function(data) {
                loadTask();
                $("#taskValue").val("");
                loadRecord();
                if (data == 0) {
                    $(".task").html("<p>You have to fill the task</p>");
                } else {
                    alert("List successfully added!");
                    $(".task").html("");
                }
            }
        })
    })

    // Remove Task
    $(document).on("click", "#delete", function(e) {
        e.preventDefault();

        var id = $(this).data('id');

        $.ajax({
            url: "./removeTask.php",
            type: "POST",
            data: {id: id},
            success: function(data) {
                loadTask();
                loadRecord();
                if (data == 0) {
                    alert("List deleted successfully!");
                }
            }
        });
    })

    // Clear Task
    $("#clear-btn").on("click", function(e) {
        e.preventDefault();

        console.log("clicked")

        $.ajax({
            url: "./clearTask.php",
            type: "POST",
            success: function(data) {
                loadTask();
                loadRecord();
                if (data == 0) {
                    alert("All of the list successfully removed!")
                }
            }
        })
    })
})