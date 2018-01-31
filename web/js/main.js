// Valid Map
// $(".tuile").on("click", function(e) {
//     $(this).parents('form:first').validate();
// });

// Moving
function moving(x, y)
{
    let id = "form" + x + "_" + y;
    document.forms[id].submit();
}


function addTime(hour, minute, second)
{

    if (!document.getElementById("chrono")) {
        clearInterval(timer);
    } else {

        // Initialize
        addSecond = second;
        addMinute = minute;
        addHour = hour;

        // Change Text
        var text = addHour + "h, " + addMinute + "mn et " + addSecond + "s";
        document.getElementById("chrono").innerHTML = text;

        // Max 48h
        if (addHour < 48) {

            addSecond++;

            if (addSecond > 59)
            {
                addSecond = 0;
                addMinute++;
            }

            if (addMinute > 59)
            {
                addMinute = 0;
                addHour++;
            }
        }

    }

}

var timer = setInterval('addTime(addHour, addMinute, addSecond)',1000);