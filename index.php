<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>
<!-- Content -->
<body>
  <div id="paypal-button"></div>
  <script>
    paypal.Button.render({
      env: 'production', // Or 'sandbox',

      commit: true, // Show a 'Pay Now' button
      style: {
        color: 'gold',
        size: 'small'
      },
      payment: function(data, actions) {
       
    //      return actions.payment.create({
    //   flow: 'checkout', // Required
    //   amount: 10.00, // Required
    //   currency: 'USD', // Required
    //   enableShippingAddress: true,
    //   shippingAddressEditable: false,
    //   shippingAddressOverride: {
    //     recipientName: 'Scruff McGruff',
    //     line1: '1234 Main St.',
    //     line2: 'Unit 1',
    //     city: 'Chicago',
    //     countryCode: 'US',
    //     postalCode: '60652',
    //     state: 'IL',
    //     phone: '123.456.7890'
    //   }
    // });
        },

      onAuthorize: function(data, actions) {
        /* 
         * Execute the payment here 
         */
          return actions.payment.execute().then(function(payment) {

                // The payment is complete!
                // You can now show a confirmation message to the customer
                alert('Success');
            });
        
      },

      onCancel: function(data, actions) {
       
      },

      onError: function(err) {
        /* 
         * An error occurred during the transaction 
         */
      }
    }, '#paypal-button');
  </script>
</body>

   <div class="row m-1">
        <div class="card col-sm-12 p-0">
            <div class="card-header">
                <h5>Shop's Info</h5>
            </div>
            <div class="card-body pt-0 pb-0 col-sm-12">
                <div class="row bg-light">
                  <table class="table table-sm table-borderless">
                    <tbody>
                      <tr>
                        <td>
                          <div>
                              <b>Shop Name: </b><span >{{$retailer->shop_name}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                              <b>Shop Status: </b><span>{{$retailer->shop_status}}</span>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>Shop Category: </b> <span >{{$retailer->shop_category}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b >Mobile Number: </b><span>{{$retailer->mobile_number}}</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>Retailer ID: </b><span>{{$retailer->retailer_id}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b>Franchise ID: </b><span>{{$retailer->franchise_id}}</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>POS Number 1: </b><span>{{$retailer->pos_number1}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b>POS Number 2: </b><span>{{$retailer->pos_number2}}</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>POS Number 3: </b><span>{{$retailer->pos_number3}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b >City: </b><span>{{$retailer->city}}</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>Region: </b><span>{{$retailer->region}}</span>
                          </div>
                        </td>
                      <td>
                        <div>
                          <b>Nearest Landmark: </b><span>{{$retailer->nearest_landmark}}</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div>
                          <b>Vicinity: </b><span>{{$retailer->vicinity}}</span>
                        </div>
                      </td>
                      <td>
                        <div>
                          <b>Premises: </b><span>{{$retailer->premises}}</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div>
                          <b>Surrounding: </b><span>{{$retailer->surrounding}}</span>
                        </div>
                      </td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>

    <div class="row m-1">
        <div class="card col-sm-12 p-0">
            <div class="card-header">
                <h5>BVS Devices & Competition</h5>
            </div>
            <div class="card-body pt-0 pb-0 col-sm-12">
                <div class="row bg-light">
                  <table class="table table-sm table-borderless">
                    <tbody>
                      <tr>
                        <td>
                          <div>
                              <b>BVS Devices: </b><span>{{$retailer->bvs_devices}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                              <b>IMEI 1: </b><span>{{$retailer->imei1}}</span>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                              <b>IMEI 2: </b><span>{{$retailer->imei2}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                              <b>IMEI 3: </b><span>{{$retailer->imei3}}</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>No BVS Devices: </b><span>{{$retailer->bvs_no_message}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b>BVS Devices Type: </b><span>{{$retailer->bvs_device_type}}</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>OMO Devices: </b> <span>{{$retailer->omo_devices}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b>OMO Sim: </b><span>{{$retailer->omo_sim}}</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>OMO Recharge: </b><span>{{$retailer->omo_recharge}}</span>
                          </div>
                        </td>
                        <td></td>
                      </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>

    <div class="row m-1">
        <div class="card col-sm-12 p-0">
            <div class="card-header">
                <h5>FS Products</h5>
            </div>
           <div class="card-body pt-0 pb-0 col-sm-12">
                <div class="row bg-light">
                  <table class="table table-sm table-borderless">
                    <tbody>
                      <tr>
                        <td>
                          <div>
                            <b>MA: </b><span>{{$retailer->ma}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b>CD Transactions: </b><span>{{$retailer->cd_transactions}}</span>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>OMO CD Transactions: </b> <span>{{$retailer->omo_cd_transactions}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b>ATM: </b><span>{{$retailer->atm}}</span>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>Till Payments: </b><span>{{$retailer->till_payments}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b>Insurance: </b><span>{{$retailer->insurance}}</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>Savings: </b> <span>{{$retailer->savings}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b>UBP: </b><span>{{$retailer->ubp}}</span>
                            </div>
                        </td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>

  <div class="row m-1">
        <div class="card col-sm-12 p-0">
            <div class="card-header">
                <h5>Cash Kitty Requirements</h5>
            </div>
            <div class="card-body pt-0 pb-0 col-sm-12">
                <div class="row bg-light">
                  <table class="table table-sm table-borderless">
                    <tbody>
                      <tr>
                        <td>
                          <div>
                            <b>For FS Business: </b><span>{{$retailer->fs_business}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b>For FS Personal Business: </b><span>{{$retailer->fs_personal_business}}</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>Digital Payments Availability: </b> <span>{{$retailer->digital_payment}}</span>
                          </div>
                        </td>
                        <td></td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
  <br>
  <br>
  <br>
    <div class="row m-1">
        <div class="card pt-0 pb-0 col-md-12 p-0">
            <div class="card-header">
                <h5>Feedback</h5>
            </div>
            <div class="card-body pt-0 pb-0 col-sm-12">
                <div class="row bg-light">
                  <table class="table table-sm table-borderless">
                    <tbody>
                      <tr>
                        <td>
                          <div>
                             <b>Commission: </b><span>{{$retailer->commission}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b>Serving: </b><span>{{$retailer->serving}}</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>Network: </b> <span>{{$retailer->network}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b>Visibility: </b> <span>{{$retailer->visibility}}</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>Others: </b><span>{{$retailer->others}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b>Primary Services 1: </b><span>{{$retailer->service1}}</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>Primary Services 2: </b><span>{{$retailer->service2}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b>Primary Services 3: </b><span>{{$retailer->service3}}</span>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
      <div class="row m-1">
        <div class="card col-md-12 p-0">
            <div class="card-header">
                <h5>Trade Visibility</h5>
            </div>
            <div class="card-body pt-0 pb-0 col-sm-12">
                <div class="row bg-light">
                  <table class="table table-sm table-borderless">
                    <tbody>
                      <tr>
                        <td>
                          <div>
                             <b>Fascia: </b><span>{{$retailer->fascia}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b>AVH: </b><span>{{$retailer->avh}}</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>QR Deployment: </b> <span>{{$retailer->qr_status}}</span>
                          </div>
                        </td>
                        <td>
                          <div>
                            <b>Qr Code: </b> <span>{{$retailer->qr_code}}</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <b>Till Number: </b><span>{{$retailer->till_number}}</span>
                          </div>
                        </td>
                        <td></td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
