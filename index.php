<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="assests/css/style.css"> -->
    <link rel="stylesheet" href="assests/css/style2.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dc cable calculator!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="calculator-head">
                    <h4 class="text-center">CALCULATE YOUR POWER FACTOR</h4>
                </div>
                <p class="text-white">
                    Recognize when you have a true solar calculator. The numbers will fade when the light is blocked and
                    there will often be a noticeable lag between pushing a button and its appearance on a calculator.
                    When using a true solar calculator operate it in a bright location but still out of direct sunlight.
                </p>
            </div>
            <div class="col-md-6">
                <div class="calculator-box">
                    <form id="calculatorform" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="calculator-head bg-warning">
                                <h4 class="text-center">CALCULATE YOUR POWER FACTOR</h4>
                            </div>
                            <div class="col-md-6">
                                <label for="html">Cable Length:</label>
                                <input type="number" class="form-control" placeholder="Length of Cable" name="email"
                                    id="cable_value" required>
                                <div class="invalid-feedback">
                                    Please provide a valid Cable Length.
                                </div>

                            </div>
                            <div class="col-md-6">
                                <label for="html">Cable Material Type:</label>
                                <select id="myDropdown" class="form-control">
                                    <option value="Aluminium">--Please select material--</option>
                                    <option value="Aluminium" data-id="0.00429" data-info="0.0000000282">Alumunium
                                    </option>
                                    <option value="Copper" data-id="0.00386" data-info="0.00000001678">Copper</option>
                                    <option value="Silver" data-id="0.0038" data-info="0.0000000159">Silver</option>
                                    <option value="Tungstun" data-id="0.00445" data-info="0.000000056">Tungstun</option>
                                    <option value="Gold" data-id="0.00651" data-info="0.0000000244">Gold</option>
                                    <option value="Annealed Copper" data-id="0.00393" data-info="0.0000000172">Annealed
                                        Copper</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="html">Current (Amp):</label>
                                <input type="number" class="form-control" placeholder="Current (Amp)"
                                    name="currentampear" id="currentamp" required>
                                <div class="invalid-feedback">
                                    Please provide a valid Current (Amp).
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="html">String Voltage :</label>
                                <input type="number" class="form-control" placeholder="String Voltage" name="stvoltage"
                                    id="stringvoltage" required>
                                <div class="invalid-feedback">
                                    Please provide a valid String Voltage.
                                </div>
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="html">Oprating Temprature:</label>
                                <input type="number" class="form-control" placeholder="Oprating Temprature"
                                    name="optemprature" id="optempr" required>
                                <div class="invalid-feedback">
                                    Please provide a valid Oprating Temprature.
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="html">Cable size(SQMM):</label>
                                <!-- <input type="number" class="form-control" placeholder="Cable size(SQMM)"
                                    name="cablesize" id="cablesize" required>
                                <div class="invalid-feedback">
                                    Please provide a valid Cable size(SQMM).
                                </div> -->

                                <select id="Dropdown" class="form-control">
                                    <option value="">--Please select material--</option>
                                    <option value="1.25"  >1.25</option>
                                    <option value="2.5" >2.5</option>
                                    <option value="4" >4</option>
                                    <option value="6" >6</option>
                                    <option value="10"  >10</option>
                                    <option value="16"  >16</option>
                                    <option value="25"  >25</option>
                                    <option value="35" >35</option>
                                    <option value="50" >50</option>
                                    <option value="70" >70</option>
                                    <option value="95"  >95</option>
                                    <option value="120"  >120</option>
                                    <option value="150"  >150</option>
                                    <option value="185"  >185</option>
                                    <option value="240"  >240</option>
                                </select>
                            </div>

                            <div class="col-lg-12 mt-3">
                                <label for="html">Temperature Coff:</label>
                                <input class="form-control" placeholder="" value="" id="vdrop" readonly>
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="html">Voltage Drop:</label>
                                <input type="text" class="form-control" placeholder="" id="voltagevalue" readonly>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="html">% Voltage Drop:</label>
                                <input type="text" class="form-control" placeholder="" id="percentdrop" readonly>
                            </div>

                            <!-- <div class="col mt-3">
                            <label for="html">Current (Amp):</label>
                                <input type="password" class="form-control" placeholder="Enter password" name="pswd">
                            </div> -->
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-success btn-sm"
                                    onclick="getValue()" onchange="validateForm()">Calculate</button>
                                <button type="button" class="btn btn-warning btn-sm"
                                    onclick="resetForm()">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<Script>
    
function getValue() {
    
    // var alu = document.getElementById("alu").innerHtml= "Alumuan";
    var cable_length = document.getElementById('cable_value').value;
    // alert(cable_length);

    var opratingTmprature = document.getElementById('optempr').value;
    console.log(opratingTmprature);

    var currentampear = document.getElementById('currentamp').value;
    // alert(currentampear);
    // var cablesize = document.getElementById('cablesize').value;
    // alert(cablesize);

    var stringVoltagevalue = document.getElementById('stringvoltage').value;
    // alert(stringVoltagevalue);

    // Get the selected option
    var dropdown = document.getElementById("myDropdown");
    var selectedOption = "";
    selectedOption = dropdown.options[dropdown.selectedIndex];
    var value = selectedOption.value;
    var material_value = selectedOption.getAttribute("data-id");
    var temprature_coff = selectedOption.getAttribute("data-info");


    var dropdowns = document.getElementById("Dropdown");
    var selectedOptions = "";
    selectedOptions = dropdowns.options[dropdowns.selectedIndex];
    var cablesize = selectedOptions.value;
    console.log(cablesize);
    
    // alert(temprature_coff);

    var tempcoffiecient = '';
    tempcoffiecient = ((opratingTmprature - 20) * material_value) + 1;
    var input = document.getElementById('vdrop');
    input.value = tempcoffiecient;

    var voltageDrop = '';
    voltageDrop = (2 * 1000000 * currentampear * cable_length * temprature_coff * tempcoffiecient) / cablesize;
    var voltaged_fixed = voltageDrop.toFixed(3);
    var voltageDropValue = document.getElementById('voltagevalue');
    voltageDropValue.value = voltaged_fixed;

    var percentageDrop = '';
    percentageDrop = (voltageDrop / stringVoltagevalue) * 100;
    var vvv = percentageDrop.toFixed(3);
    // alert (vvv);
    var percentageDropvalue = document.getElementById('percentdrop');
    percentageDropvalue.value = vvv;
    // alert(percentageDrop);

    console.log(currentampear)
    console.log(cable_length)
    console.log(material_value)
    console.log(tempcoffiecient)






    // Do something with the value and ID
    console.log("Selected value: " + value);
    console.log("Selected ID: " + material_value);
    console.log("Selected info: " + temprature_coff);
}
</Script>
<script>
function resetForm() {
    // Get the form element
    var form = document.getElementById('calculatorform');
    // Reset the form
    form.reset();
}
</script>

<script>
(function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('button', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
</script>