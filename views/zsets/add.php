<?php $this->addHeader("<script src=\"{$this->router->baseUrl}/js/redmin/zsets.js\" type=\"text/javascript\"></script>"); ?>
<form class="form">
    <legend>Add sorted lists</legend>
    <div class="input-prepend">
        <span class="add-on"><i class="icon-key"></i></span>
        <input type="text" placeholder="Key" name="key">
    </div>
    <div class="input-prepend">
        <span class="add-on"><i class="icon-trophy"></i></span>
        <input type="text" placeholder="score" name="score">
    </div>
    <div>
        <textarea placeholder="Value" name="value"></textarea>
    </div>
    <button type="submit" class="btn" id="add_zset"><i class="icon-plus"></i> Add</button>
</form>
