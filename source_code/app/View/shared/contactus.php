<!--
 * Contact
 * @author     Lewis Mckaig
 *@version 1.0
-->
<div class="container">

    <form class="p-3" action="../Index/send" method="post">

        <div class="form-group col-sm-8 offset-sm-2">
            <label for="email">Your Email:</label>
            <input id="email" type="email" name="email" class="form-control rounded" value="" required>
            <span class="help-block"></span>
        </div>
        <div class="form-group col-sm-8 offset-sm-2">
            <label for="message" >Your Message:</label>
            <textarea id="message" name = "message" rows="4" cols="50" value = "" class="form-control rounded"></textarea>
            <span class="help-block"></span>
        </div>
        <div class="form-group col-sm-8 offset-sm-2">
            <input type="submit" class="btn btn-primary" value="Submit" style ="background-color:#003881">
        </div>

    </form>

</div>