
<!DOCTYPE html>

<html>
    <head>
        
        <title>NEXUS Plus</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script>
            
            function calc()
            {
                var n1 = parseFloat(document.getElementById('n1').value);
                
                var oper = document.getElementById('operators').value;
                
                if(oper === 'A')
                {
        	        document.getElementById('day').innerHTML = n1 * 0.005;
                  document.getElementById('week').innerHTML = n1 * 0.005 * 5;
                  document.getElementById('month').innerHTML = n1 * 0.005 * 22;
                  document.getElementById('profit_out').innerHTML = n1 * 0.005 * 22;
                  document.getElementById('capital_with').innerHTML = n1 * 0.005 * 22 + n1;
                  document.getElementById('broke').innerHTML = (n1 * 0.005 * 22 + n1)*(2/100);
                  document.getElementById('net_profit').innerHTML = n1 * 0.005 * 22 + n1 - (n1 * 0.005 * 22 + n1)*(2/100) ;
                }
                
                if(oper === 'B')
                {
                    document.getElementById('day').innerHTML = n1 * 0.007;
                    document.getElementById('week').innerHTML = n1 * 0.007 * 5;
                    document.getElementById('month').innerHTML = n1 * 0.007 * 22;
                    document.getElementById('profit_out').innerHTML = n1 * 0.007 * 66;
                    document.getElementById('capital_with').innerHTML = n1 * 0.007 * 66 + n1;
                    document.getElementById('broke').innerHTML = (n1 * 0.007 * 66 + n1)*(2/100);
                    document.getElementById('net_profit').innerHTML = n1 * 0.007 * 66 + n1 - (n1 * 0.007 * 66 + n1)*(2/100) ;
                }

            }
        </script>

<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

input[type=button]{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

.grid-container {
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 10px;
  padding: 10px;
}

button {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 10px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

.button1 {
  background-color: #555555;
  }

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  vertical-align: middle;
  border-bottom: 1px solid #ddd;
  text-align: left;
  padding: 8px;
}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4c90af;
  color: white;
}

.headi{
  color:Tomato ; 
  text-align:center ;
}

@media print {
    body * {
      visibility: hidden;
    }

    .print-info, .print-info * {
      visibility: visible;
    }

    .print-info {
      position: absolute;
      left: 0px;
      top: 0px;
    }
}
</style>
        
    </head>
    <body><h1 class="headi">NEXUSPlus : Calculation</h1>
    <a href="clients/">Check</a>
    </br><a href="nexus/">NEXUS</a>


   <div>     
        <input type="text" id="n1"/ placeholder="Capital"><br/><br/>
        
        <select id="operators">
            <option value="A">PLAN A</option>
            <option value="B">PLAN B</option>
        </select>
        
        <button onclick="calc();">SUBMIT</button>
</div>
	<div>
		<p>
			*** Registration Fee : 500 for Plan A and 1000 for Plan B <br>
			*** Brokerage Fee : 2%
		</p>
	</div>
<div class="print-info"> 
    <table id="customers">
      <tr>
        <th colspan="2"><h3 style="text-align:center;">Report</h3></th>
      </tr>
      <tr>  
        <td>Per Day :</td>
        <td><div id="day"></div></td>
      </tr>
      <tr>
        <td>Per WEEK : </td>
        <td><div id="week"></div></td>
      </tr>
      <tr>
        <td>Per Month : </td>
        <td><div id="month"></div></td>
      </tr>
      <tr>
        <td>Profits without Capital : </td>
        <td><div id="profit_out"></div></td>
      </tr>
      <tr>
        <td>Profits with Capital : </td>
        <td><div id="capital_with"></div></td>
      </tr>
      <tr>
        <td>Brokerage Fee : </td>
        <td><div id="broke"></div></td>
      </tr>
      <tr>
        <td>Net Profit : </td>
        <td><div id="net_profit"></div></td>
      </tr>
    </table>
</div>
<div><button class="button1" onclick="window.print();">Print report</button></div>
    </body>
</html>
