# paypal_php_cart

### PAYPAL CART, NO SQL, NO IPN, re-use paypal generated code for 'Add to Cart'

Convert the dropdown generated paypal BUTTON to a STORE by parsing PAYPAL generated code behind the scene
item by item page 

## Prepararion
### Prerequisites
  * Pay pal account
  * Web server with PHP enabled

### Make your cart stupid drop down using pay pal tools
  * Go to the menu which sais 'Pay Links and buttons', mine is under Pay & Get Paid.
  * Goto 'Create button' , then select 'Add to cart'
  * Use large buttons otherwise you have to change the php $x=rand values to fit in your button area

#### The interface sucks but here is what I did
   * FIlled out first row' Product Name Price Currency product ID

![image](https://github.com/circinusX1/paypal_php_cart/assets/69641625/043b75e9-7cec-41c7-afad-13ad19266cc0)


   * Click + Add  drop-down menu
   * Then add descriptions as shown here


![image](https://github.com/circinusX1/paypal_php_cart/assets/69641625/c12e8ebb-1d23-44d6-994e-5f5086c3ecfa)



   * Fill below Tax and things and set return URL
   * Fill below Tax and things and set return URL



   * Click at the bottom SAVE and Create Button
   * Will generate this HTML

```
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
  <input type="hidden" name="cmd" value="_s-xclick" />
  <input type="hidden" name="hosted_button_id" value="XXXXXXXXXXXXX" />
  <table>
    <tr>
      <td>
        <input type="hidden" name="on0" value="6 coils guitar pickup"/>
        6 coils guitar pickup
      </td>
    </tr>
    <tr>
      <td>
        <select name="os0">
          <option value="6 coils guitar pickup">
            6 coils guitar pickup US$100.00
          </option>
          <option value="Guitar pickup premaplifier">
            Guitar pickup premaplifier US$50.00
          </option>
          <option value="Guitar pickup DIY kit">
            Guitar pickup DIY kit US$25.00
          </option>
        </select>
      </td>
    </tr>
  </table>
  <input type="hidden" name="currency_code" value="USD" />
  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Add to Cart" />
</form>

```
    * Save the generated 'BUTTON' in a file, like: ppal_form.html
    * If you open ppal_form.html in a browser will show as stupid as:

    
![image](https://github.com/circinusX1/paypal_php_cart/assets/69641625/83347771-e814-4d31-a705-84c3705a9cdd)

#### Let's make it more appealing

    * Add your items images in the above generated HTML, Open the ppal_form.html and edit as ...
    * Add next line in each option description the link to the item you sale image <img...
    * Save

````
        <select name="os0" id="selector">
          <option value="6 coils guitar pickup">
            6 coils guitar pickup US$100.00
            <img src="images/pickup_no_led.png">
          </option>
          <option value="Guitar pickup premaplifier">
            Guitar pickup premaplifier US$50.00
            <img src="tr_preamp_kit.png">
          </option>
          <option value="Guitar pickup DIY kit">
            Guitar pickup DIY kit US$25.00
            <img src="images/tr_preamp_pcb_front.png">
            
          </option>
        </select>

````   
    * Download the my_store.php from the git
    * Goto the top and change items descriptions $arr[0]...$arr[number of your items]
    * Change line '$dom->load("./ppform.html");' to load your form.html
    
#### The look    
    The directory structure  of what we did looks like:

```
├── images
│   ├── pickup-exploded.png
│   ├── pickup_no_led.png
│   ├── tr_preamp_kit.png
│   └── tr_preamp_pcb_front.png
├── my_store.php                      <--- you open this in browser
└── ppform.html

```

    * And will look like

![image](https://github.com/circinusX1/paypal_php_cart/assets/69641625/c16dd339-e158-48c6-9f98-82f089e5658f)



    




  
