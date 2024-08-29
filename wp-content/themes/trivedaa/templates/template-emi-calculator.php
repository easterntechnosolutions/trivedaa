<?php   
/*
Template Name: EMI Calculator
*/

get_header();
get_template_part('parts/page-title');?>

<div class="emi-calculator-container">
        <h2 class="emi-calculator-heading">EMI Calculator</h2>
        <div class="emi-calculator-form">
            <form id="emiForm">
                <div class="form-group">
                    <label for="principal">Loan Amount (₹):</label>
                    <input type="number" id="principal" class="form-control" value="500000" placeholder="Enter Loan Amount" required>
                    <div class="progress-bar-container">
                        <div class="progress-bar" id="principalProgress"></div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="rate">Interest Rate (% per annum):</label>
                    <input type="number" id="rate" class="form-control" step="0.01" value="10.5" placeholder="Enter Interest Rate" required>
                    <div class="progress-bar-container">
                        <div class="progress-bar" id="rateProgress"></div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="time">Loan Tenure (Years):</label>
                    <input type="number" id="time" class="form-control" value="10" placeholder="Enter Loan Tenure" required>
                    <div class="progress-bar-container">
                        <div class="progress-bar" id="timeProgress"></div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="startDate">Start Date:</label>
                    <input type="date" id="startDate" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
                </div>
                
                <button type="button" onclick="calculateEMI()" class="btn btn-primary">Calculate EMI</button>
            </form>
        </div>
        
        <div class="emi-results">
            <div class="emi-chart-and-table">
                <div class="emi-charts">
                    <canvas id="emiPieChart"></canvas>
                </div>
                <div class="emi-details-table-container">
                    <h3>EMI Details</h3>
                    <table class="emi-details-table">
                        <tr>
                            <th>Particular</th>
                            <th>Amount (₹)</th>
                        </tr>
                        <tr>
                            <td>Loan EMI (Monthly)</td>
                            <td id="emiMonthly">0</td>
                        </tr>
                        <tr>
                            <td>Total Interest Payable</td>
                            <td id="totalInterest">0</td>
                        </tr>
                        <tr>
                            <td>Total Payment (Principal + Interest)</td>
                            <td id="totalPayment">0</td>
                        </tr>
                    </table>
                </div>
            </div>

            <canvas id="emiBarChart"></canvas>
            
            <div class="emi-schedule">
                <h3>EMI Payment Schedule</h3>
                <div id="scheduleAccordion" class="accordion"></div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>