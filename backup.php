<div class="calculator-center">
                <form name="calcform" autocomplete="off" class="element">
                    <table class="calc" id="calc-dc">
                        <tbody>
                            <tr>
                                <td>Resistance (<i>R</i>):</td>
                            </tr>
                            <tr>
                                <td><input type="text" min="0" step="any" id="r" name="r" onclick="ondata(this)"
                                        onkeyup="ondata(this)" autofocus="" class="form-control"></td>
                                <td>
                                    <select name="cr" class="form-control" onchange="onselchange(this, 0);">
                                        <option selected="">ohms (Ω)</option>
                                        <option>kilo-ohms (kΩ)</option>
                                        <option>mega-ohms (MΩ)</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Current (<i>I</i>):</td>
                            </tr>
                            <tr>
                                <td><input type="text" step="any" id="i" name="i" onclick="ondata(this)"
                                        onkeyup="ondata(this)" class="form-control"></td>
                                <td>
                                    <select name="ci" class="form-control" onchange="onselchange(this, 1);">
                                        <option>micro-amps (μA)</option>
                                        <option>milli-amps (mA)</option>
                                        <option selected="">amps (A)</option>
                                        <option>kilo-amps (kA)</option>
                                        <option>mega-amps (MA)</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Voltage (<i>V</i>):</td>
                            </tr>
                            <tr>
                                <td><input type="text" step="any" id="v" name="v" onclick="ondata(this)"
                                        onkeyup="ondata(this)" class="form-control"></td>
                                <td>
                                    <select name="cv" class="form-control" onchange="onselchange(this, 2);">
                                        <option>micro-volts (μV)</option>
                                        <option>milli-volts (mV)</option>
                                        <option selected="">volts (V)</option>
                                        <option>kilo-volts (kV)</option>
                                        <option>mega-volts (MV)</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Power (<i>P</i>):</td>
                            </tr>
                            <tr>
                                <td><input type="text" min="0" step="any" id="p" name="p" onclick="ondata(this)"
                                        onkeyup="ondata(this)" class="form-control"></td>
                                <td>
                                    <select name="cp" class="form-control" onchange="onselchange(this, 3);">
                                        <option>micro-watts (μW)</option>
                                        <option>milli-watts (mW)</option>
                                        <option selected="">watts (W)</option>
                                        <option>kilo-watts (kW)</option>
                                        <option>mega-watts (MW)</option>
                                    </select>
                                </td>
                            </tr>
                            <tr colspan="2" class="mt-3">
                                <td>
                                    <input name="bcalc" onclick="oncalc()" type="button" value="Calculate"
                                         class="btn btn-danger">
                                    <input type="reset" value="Reset" class="btn btn-danger">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>