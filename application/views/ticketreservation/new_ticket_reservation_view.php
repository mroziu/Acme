   <div id="form_block">
   <?php $attributes = array('name' => 'forma');
   echo form_open('ticket/verify_new_reservation', $attributes); ?>
     <table id="form_table">
         <tr>
             <td>
    <label for="name">Name:</label>
             </td>
             <td>
    <input type="text" size="30" value="Damian" id="name" name="name"/>
             </td>
         </tr>
         <tr>
             <td>
    <label for="surname">Surname:</label>
             </td>
             <td>
    <input type="text" size="30" value="Mrozek" id="surname" name="surname"/>
             </td>
         </tr>
         <tr>
             <td>
    <label for="address">Home address:</label>
             </td>
             <td>
    <input type="text" size="30" value="Sosnowiec, ul. Wagowa" id="address" name="address"/>
             </td>
         </tr>
         <tr>
             <td>
    <label for="email">e-mail:</label>
             </td>
             <td>
    <input type="text" size="30" value="test@test.pl" id="email" name="email"/>
             </td>
         </tr>
         <tr>
             <td>
    <label for="adulttickets">Adult tickets:</label>
             </td>
             <td>
    <input type="text" size="30" value="1" id="adulttickets" name="adulttickets"/>
             </td>
         </tr>
         <tr>
             <td>
    <label for="childtickets">Child tickets:</label>
             </td>
             <td>
    <input type="text" size="30" value="1" id="childtickets" name="childtickets"/>
             </td>
         </tr>
         <tr>
             <td>
    <label for="seniortickets">Senior tickets:</label>
             </td>
             <td>
    <input type="text" size="30" value="1" id="seniortickets" name="seniortickets"/>
             </td>
         </tr>
     </table>
    <br/>
   </form>
      </div> <!-- form_block -->
   <ul id="main_menu">
    <?php echo '<li><a href="javascript:document.forma.submit();">Save</a>'; ?>
   </ul>
    