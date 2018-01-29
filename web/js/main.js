// Valid Map
// $(".tuile").on("click", function(e) {
//     $(this).parents('form:first').validate();
// });


function moving(x, y)
{
    let id = "form" + x + "_" + y;
    document.forms[id].submit();
}
