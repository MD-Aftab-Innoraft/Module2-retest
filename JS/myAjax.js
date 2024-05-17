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
          output += "<tr><td>" + data[i].name + "</td><td>" + data[i].price + " $<td><input id='u" + data[i].id + "' type='number' placeholder='0' max='10'></td></tr>";
        }
        $('#unhealthySnacksBody').html(output);
      },
      error: function(xhr, status, error) {
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
          output += "<tr><td>" + data[i].name + "</td><td>" + data[i].price + " $<td><input id='h" + data[i].id + "' type='number' placeholder='0' max='10'></td></tr>";
        }
        $('#healthySnacksBody').html(output);
      },
      error: function(xhr, status, error) {
        alert(error);
      }
    });
  }

  // Show both the snacks table(healthy and unhealthy).
  showUnhealthySnacks();
  showHealthySnacks();
  // Initially hide the order details form.
  $('#submitForm').hide();

  // On clicking submit button.
  $('#submitBtn').click(function() {
    // Show the order details form .
    $('#submitForm').show();
    let uAmount = 0;
    let hAmount = 0;
    let totalAMount = 100;
    for(i = 0; i < 100; i++) {
      let uItemQuantity= $("#u-" + i).val();
      let hItemQuantity= $("#h-" + i).val();
      let uItemPrice = 1;
      let HItemPrice = 1;
      uAmount = uItemPrice * uItemQuantity;
      hAmount = HItemPrice * hItemQuantity;
    }
    totalAMount = uAmount + hAmount;
    $("#s-amount").val(totalAmount);
  })
});
