<?php
require_once '../../../dompdf/autoload.inc.php'; 
 
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 
 
// Instantiate and use the dompdf class 
$dompdf = new Dompdf();

// Load HTML content 
$dompdf->loadHtml('<h1>list Categorie</h1><div class="table-responsive">
                                

    <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="DataTables_Table_0"><tbody><tr>
        <th>Image</th>
        <th>nom</th>
        
      
        
    </tr>


</tbody><tbody id="myTable">
             
                                <tr class="tr-shadow">


<td>
<img src="../../image/16.jpg" <="" img="">
</td>
<td>
tap                                </td>




                

                </tr><tr class="spacer"></tr>
               
            
        
 
                                        <tr class="tr-shadow">


<td>
<img src="../../image/13.jpg" <="" img="">
</td>
<td>
tapzzz                                </td>




                

                </tr><tr class="spacer"></tr>
               
            
        
 
                                        <tr class="tr-shadow">


<td>
<img src="../../image/18.jpg" <="" img="">
</td>
<td>
lenovo                                 </td>




                

                </tr><tr class="spacer"></tr>
               
            
        
 
                </tbody>
</table>

'); 
 
// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'landscape'); 
 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF to Browser 
$dompdf->stream();

// Load content from html file 
$html = file_get_contents("listBlog.php"); 
$dompdf->loadHtml($html); 
 
// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'landscape'); 
 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF (1 = download and 0 = preview) 
$dompdf->stream("codexworld", array("Attachment" => 0));

?>