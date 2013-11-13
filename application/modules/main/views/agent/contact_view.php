<style>
    #from-contact{
        width: 615px;
        height: 100%;
        font-size: 13px;
    }
    #from-contact p{ float: left; clear: both; display: inline-block;margin-bottom:5px}
    #from-contact .label{ float: left;display: inline-block; height: 25px; text-align: right; width: 200px; line-height: 25px; margin-right:5px;}
    #from-contact p span{ float: left;display: inline-block; height: 25px; text-align: left}
    #from-contact p span input{ float: left;display: inline-block; height: 25px; text-align: left; border: 1px #ccc solid; width: 395px; padding-left: 3px;}
    #from-contact p span textarea{ float: left;display: inline-block; height: 120px; text-align: left; border: 1px #ccc solid; width: 392px; padding-left: 3px;}
    #from-contact .contact-button{
        width: 378px;
        margin-top: 100px;
        padding-left: 215px;
    }
</style>
<script>
    $(document).ready(function() {
        $('#from-contact').validate({
            submitHandler: function(form) {
                $.post('subscript.php', $('#from-contact').serialize());
            }
        });
    });
</script>
<h2 class="centerBoxHeading agentBoxHeading">Contact us</h2>
<div id="agent-board-content">
<form id="from-contact" name="contact" action="" method="post">
    <p><label class="label">Name:</label><span><input class="required" name="name" id="name" placeholder="enter your name" > </span></p>
    <p><label class="label">Email:</label><span><input class="required" name="name" id="name" placeholder="enter your name" > </span></p>
    <p><label class="label">Mobile no:</label><span><input class="required" name="name" id="name" placeholder="enter your name" > </span></p>
    <p><label class="label">Comments:</label><span><textarea name="comments" id="comments"></textarea></span></p>
    <div class="clear"></div>
    <div class="form-actions contact-button" >
    <button type="button" class="btn btn-primary">Save changes</button>
    <button type="button" class="btn">Cancel</button>
    </div>

</form>
</div>
<div class="clear"></div>

