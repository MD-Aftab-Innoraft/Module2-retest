// When the document is ready.
$(document).ready(function () {

  // Ajax code for showing Unhealthy snacks from the database.
  function showUnhealthySnacks() {
    $.ajax({
      url: '/Utility/retrieveUnhealthySnacks.php',
      method: 'get',
      dataType: 'json',
      success: function (data) {
        let output = '';
        for (i = 0; i < data.length; i++) {
          output += "<tr><td>" + data[i].name + "</td><td>" + data[i].price + " $<td>"+ data[i].quantity +"</td>" + "</td></tr>";
        }
        $('#unhealthySnacksBody').html(output);
      },
      error: function (xhr, status, error) {
        alert(error);
      }
    });
  }

  // Ajax code for showing healthy snacks from the database.
  function showHealthySnacks() {
    $.ajax({
      url: '/Utility/retrieveHealthySnacks.php',
      method: 'get',
      dataType: 'json',
      success: function (data) {
        let output = '';
        for (i = 0; i < data.length; i++) {
          output += "<tr><td>" + data[i].name + "</td><td>" + data[i].price + " $<td>" + data[i].quantity + " </td>" + "</td></tr>";
        }
        $('#healthySnacksBody').html(output);
      },
      error: function (xhr, status, error) {
        alert(error);
      }
    });
  }

  // When the page is loaded/refreshed, show both the snack tables.
  showUnhealthySnacks();
  showHealthySnacks();
  // Hide messages for entry.
  $('#healthy-msg').hide();
  $('#unhealthy-msg').hide();

  // On clicking the add unhealthy btn.
  $('#btnaddUnhealthy').click(function (e) {
    e.preventDefault();
    let id = $('#stid').val();
    let nm = $('#nameid').val();
    let cd = $('#codeid').val();
    let qt = $('#quantityid').val();
    let pr = $('#priceid').val();

    let myData = { id: id, name: nm, code: cd, quantity: qt, price: pr };
    // Ajax code to add a new task.
    $.ajax({
      url: "./Utility/addUnhealthySnack.php",
      method: "post",
      data: myData,
      success: function (response) {
        $('#unhealthy-msg').show();
        $('#healthy-msg').hide();
        $('#unhealthy-msg').html(response);
        showUnhealthySnacks();
      },
      error: function (xhr, status, error) {
        $('#unhealthy-msg').html(error);
        alert(error);
      }
    });
    $('#stid').val('');
    $('#nameid').focus();
    // Resetting the form.
    $('#addUnhealthyForm')[0].reset();
  });

  // On clicking the add healthy btn.
  $('#btnaddHealthy').click(function (e) {
    e.preventDefault();
    let id = $('#h-stid').val();
    let nm = $('#h-nameid').val();
    let cd = $('#h-codeid').val();
    let qt = $('#h-quantityid').val();
    let pr = $('#h-priceid').val();

    let myData = { id: id, name: nm, code: cd, quantity: qt, price: pr };
    // Ajax code to add a new healthy snack.
    $.ajax({
      url: "./Utility/addHealthySnack.php",
      method: "post",
      data: myData,
      success: function (response) {
        $('#healthy-msg').show();
        $('#unhealthy-msg').hide();
        $('#healthy-msg').html(response);
        showHealthySnacks();
      },
      error: function (xhr, status, error) {
        $('#healthy-msg').html(error);
        alert(error);
      }
    });
    $('#h-stid').val('');
    $('#h-nameid').focus();
    // Resetting the form.
    $('#addHealthyForm')[0].reset();
  });
});

