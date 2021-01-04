<?php
require_once '../../../dompdf/autoload.inc.php'; 
 
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 
 
// Instantiate and use the dompdf class 
$dompdf = new Dompdf();

// Load HTML content 
$dompdf->loadHtml('<h1>List produit</h1>
<table class="table table-bordered table-striped table-hover dataTable js-exportable no-footer" id="DataTables_Table_0">
                                    <thead>
                                        <tr>
                                        <th>image Produit</th>
                                        <th>Nom </th>
                                        <th>Prix DT </th>
                                        <th>quantite totale</th>
                                        <th>description</th>
                                        <th>categorie</th>
                                       

                                        </tr>
                                    </thead>
                                    
                                    <tbody id="myTable">
                                                 
                                                                    <tr class="tr-shadow" role="row">
                               
                            <td>  <img src="../../image/13.jpg" <="" img=""></td>
                                                   
                                <td>
                                BADER                                </td>
                                <td class="desc">250DT</td>
                              
                                <td>25</td>
                                <td>
                                dddddd                                </td>
                                <td>
                                10                                </td>
                       
                                                
                                            
                                     
                                                                            <tr class="tr-shadow">
                               
                            <td>  <img src="../../image/13.jpg" <="" img=""></td>
                                                   
                                <td>
                                BADER                                </td>
                                <td class="desc">250DT</td>
                              
                                <td>25</td>
                                <td>
                                dddddd                                </td>
                                <td>
                                10                                </td>
                       
                                                   
                                                
                                            
                                     
                                                                            <tr class="tr-shadow">
                               
                            <td>  <img src="../../image/13.jpg" <="" img=""></td>
                                                   
                                <td>
                                BADER                                </td>
                                <td class="desc">250DT</td>
                              
                                <td>25</td>
                                <td>
                                dddddd                                </td>
                                <td>
                                10                                </td>
                            
                                                   
                                                
                                            
                                     
                                                                            <tr class="tr-shadow">
                               
                            <td>  <img src="../../image/13.jpg" <="" img=""></td>
                                                   
                                <td>
                                BADER                                </td>
                                <td class="desc">250DT</td>
                              
                                <td>25</td>
                                <td>
                                dddddd                                </td>
                                <td>
                                10                                </td>
                              
                                                   
                                                
                                            
                                     
                                                                            <tr class="tr-shadow">
                               
                            <td>  <img src="../../image/13.jpg" <="" img=""></td>
                                                   
                                <td>
                                BADER                                </td>
                                <td class="desc">250DT</td>
                              
                                <td>25</td>
                                <td>
                                dddddd                                </td>
                                <td>
                                10                                </td>
                              
                                                   
                                                
                                            
                                     
                                                                            <tr class="tr-shadow">
                               
                            <td>  <img src="../../image/18.jpg" <="" img=""></td>
                                                   
                                <td>
                                tap                                </td>
                                <td class="desc">100DT</td>
                              
                                <td>25</td>
                                <td>
                                tape                                </td>
                                <td>
                                11                                </td>
                         
                                                   
                                                
                                            
                                     
                                                                            <tr class="tr-shadow">
                               
                            <td>  <img src="../../image/18.jpg" <="" img=""></td>
                                                   
                                <td>
                                tap                                </td>
                                <td class="desc">100DT</td>
                              
                                <td>25</td>
                                <td>
                                tape                                </td>
                                <td>
                                11                                </td>
                                
                                                   
                                                
                                            
                                     
                                                                            <tr class="tr-shadow">
                               
                            <td>  <img src="../../image/18.jpg" <="" img=""></td>
                                                   
                                <td>
                                tap                                </td>
                                <td class="desc">100DT</td>
                              
                                <td>25</td>
                                <td>
                                tape                                </td>
                                <td>
                                11                                </td>
                           
                                                
                                            
                                     
                                                                            <tr class="tr-shadow">
                               
                            <td>  <img src="../../image/18.jpg" <="" img=""></td>
                                                   
                                <td>
                                tap                                </td>
                                <td class="desc">100DT</td>
                              
                                <td>25</td>
                                <td>
                                tape                                </td>
                                <td>
                                11                                </td>
                             
                                                   
                                                
                                            
                                     
                                                                            <tr class="tr-shadow">
                               
                            <td>  <img src="../../image/16.jpg" <="" img=""></td>
                                                   
                                <td>
                                pc                                </td>
                                <td class="desc">522DT</td>
                              
                                <td>25</td>
                                <td>
                                lkjhgfdsq                                </td>
                                <td>
                                15                                </td>
                                
                                                   
                                                
                                            
                                     
                                                                            <tr class="tr-shadow">
                               
                            <td>  <img src="../../image/16.jpg" <="" img=""></td>
                                                   
                                <td>
                                pc                                </td>
                                <td class="desc">522DT</td>
                              
                                <td>25</td>
                                <td>
                                lkjhgfdsq                                </td>
                                <td>
                                15                                </td>
                            
                                            
                                     
                                                                                      
                                      
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
$html = file_get_contents("listMedecin.php"); 
$dompdf->loadHtml($html); 
 
// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'landscape'); 
 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF (1 = download and 0 = preview) 
$dompdf->stream("codexworld", array("Attachment" => 0));

?>