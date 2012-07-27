function addRow(tableID) {

            var table = document.getElementById(tableID);
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
 
            var cell1 = row.insertCell(0);
            cell1.innerHTML = 2*rowCount - 1;
             
            var cell2 = row.insertCell(1);
            var element = document.createElement("input");
            element.type = "text";
            element.name = "data[Colorcode][" + (2*rowCount - 2) + "][dmc]";
            element.id= "Colorcode" + (2*rowCount - 2) + "dmc";            
            cell2.appendChild(element);
            
            var cell3 = row.insertCell(2);
            var element = document.createElement("input");
            element.type = "text";
            element.name = "data[Colorcode][" + (2*rowCount - 2) + "][anchor]";
            element.id= "Colorcode" + (2*rowCount - 2) + "Anchor";            
            cell3.appendChild(element);

            var cell4 = row.insertCell(3);
            var element = document.createElement("input");
            element.type = "text";
            element.name = "data[Colorcode][" + (2*rowCount - 2) + "][venus]";
            element.id= "Colorcode" + (2*rowCount - 2) + "Venus";            
            cell4.appendChild(element);

            var cell5 = row.insertCell(4);
            cell5.innerHTML = 2*rowCount;

            var cell6 = row.insertCell(5);
            var element = document.createElement("input");
            element.type = "text";
            element.name = "data[Colorcode][" + (2*rowCount - 1) + "][dmc]";
            element.id= "Colorcode" + (2*rowCount - 1) + "dmc";            
            cell6.appendChild(element);
                         
            var cell7 = row.insertCell(6);
            var element = document.createElement("input");
            element.type = "text";
            element.name = "data[Colorcode][" + (2*rowCount - 1) + "][anchor]";
            element.id= "Colorcode" + (2*rowCount - 1) + "Anchor";            
            cell7.appendChild(element);

            var cell8 = row.insertCell(7);
            var element = document.createElement("input");
            element.type = "text";
            element.name = "data[Colorcode][" + (2*rowCount - 1) + "][venus]";
            element.id= "Colorcode" + (2*rowCount - 1) + "Venus";            
            cell8.appendChild(element);

}