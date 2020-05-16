
<h2>Update infomation</h2>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $customer->id; ?>"/>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $customer->name; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Birthday</label>
        <textarea name="birthday" class="form-control"><?php echo $customer->birthday; ?></textarea>
    </div>
    <div class="form-group">
        <label>Address</label>
        <textarea name="address" class="form-control"><?php echo $customer->address; ?></textarea>
    </div>
    <div class="form-group">
        <label>Email</label>
        <textarea name="email" class="form-control"><?php echo $customer->email; ?></textarea>
    </div>
    <div class="form-group">
        <label>Numbers Phone</label>
        <textarea name="phone" class="form-control"><?php echo $customer->phone; ?></textarea>
    </div>
    <div class="form-group">
        <label>Gender</label>
        <textarea name="gender" class="form-control"><?php echo $customer->gender; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>

