//Add Row of Education Details

$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input class="form-control"  placeholder="Enter Degree" type="text" name="degree' + counter + '"></td>';
        cols += '<td><input class="form-control" placeholder="Enter Major" type="text" name="major' + counter + '"></td>';
        cols += '<td> <input class="form-control" placeholder="Enter Institution Name" type="text" name="institution' + counter + '"> </td>';
        cols += '<td> <input class="form-control" placeholder="Enter Passing Year" type="text" name="passingyear' + counter + '"> </td>';
        cols += '<td> <input class="form-control" placeholder="Enter Result" type="text" name="result' + counter + '"> </td>';

        cols += '<td><button class="close ibtnDel"  type="button"><span type="button" aria-hidden="true"> &times;</span></button></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });


});


//Add row of Add-new-Vehicle


$(document).ready(function () {
    var counter = 0;

    $("#addvehiclerow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input class="form-control"  placeholder="Enter Engine No" type="text" name="engine no' + counter + '"></td>';
        cols += '<td><input class="form-control" placeholder="Enter Chassis No" type="text" name="chassis no' + counter + '"></td>';
        cols += ' <td><select class="form-control ' + counter + '"><option>Branch</option><option>Gazipur</option> <option>Dhaka</option> </select></td>';

        cols += '<td><button class="close ibtnDel"  type="button"><span type="button" aria-hidden="true"> &times;</span></button></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });


});







