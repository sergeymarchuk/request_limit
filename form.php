<form class='form-signin mt-5' action='index.php' method='post' style="width: 30%; min-width: 350px; margin: auto;">
    <input type="radio" name="checkType" value="bwl" <?= checkType('bwl') ?> > block with limit<br>
    <input type="radio" name="checkType" value="bwwl" <?= checkType('bwwl') ?> > block with wait limit<br>
    <h1 class="h3 mb-3 font-weight-normal">Pleae sign in</h1>
    <input class="mb-3 btn-block" type='text' placeholder='your phone number' name='phoneNumber'>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy MARICH 2018</p>
</form>