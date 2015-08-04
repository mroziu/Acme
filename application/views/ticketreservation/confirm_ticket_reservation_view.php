   <div id="form_block">
   <?php $attributes = array('name' => 'forma');
   echo form_open('ticket/ticket_confirmed', $attributes); ?>
     <table id="form_table">
         <tr>
             <td>
    <label for="name">Name:</label>
             </td>
             <td>
    <input type="text" size="30" disabled value="<?php echo $name ?>" id="name" name="name"/>
             </td>
         </tr>
         <tr>
             <td>
    <label for="surname">Surname:</label>
             </td>
             <td>
    <input type="text" size="30" disabled value="<?php echo $surname ?>" id="surname" name="surname"/>
             </td>
         </tr>
         <tr>
             <td>
    <label for="address">Home address:</label>
             </td>
             <td>
    <input type="text" size="30" disabled value="<?php echo $address ?>" id="address" name="address"/>
             </td>
         </tr>
         <tr>
             <td>
    <label for="email">e-mail:</label>
             </td>
             <td>
    <input type="text" size="30" disabled value="<?php echo $email ?>" id="email" name="email"/>
             </td>
         </tr>
         <tr>
             <td>
    <label for="adulttickets">Adult tickets:</label>
             </td>
             <td>
    <input type="text" size="30" disabled value="<?php echo $adulttickets ?>" id="adulttickets" name="adulttickets"/>
             </td>
         </tr>
         <tr>
             <td>
    <label for="childtickets">Child tickets:</label>
             </td>
             <td>
    <input type="text" size="30" disabled value="<?php echo $childtickets ?>" id="childtickets" name="childtickets"/>
             </td>
         </tr>
         <tr>
             <td>
    <label for="seniortickets">Senior tickets:</label>
             </td>
             <td>
    <input type="text" size="30" disabled value="<?php echo $seniortickets ?>" id="seniortickets" name="seniortickets"/>
             </td>
         </tr>
         <tr>
             <td>
    <label for="confirmationnumber">Confirmation number:</label>
             </td>
             <td>
    <input type="text" size="30" disabled value="<?php echo $hash ?>" id="confirmationnumber" name="confirmationnumber"/>
             </td>
         </tr>
     </table>
    <br/>
   </form>
      </div> <!-- form_block -->
   <ul id="main_menu">
    <?php echo '<li><a href="javascript:document.forma.submit();">Confirm</a>'; ?>
   </ul>
    