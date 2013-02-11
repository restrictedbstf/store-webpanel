  <ul class="breadcrumb">
    <li><a href="dashboard.html">Home</a> <span class="divider">/</span></li>
    <li><a href="items.html">Items</a> <span class="divider">/</span></li>
    <li class="active">Add Item</li>
  </ul>
  <div class="page-header">
    <h1>Add New Item Item</h1>
  </div>
  <form class="form-horizontal" action="<?php echo base_url('index.php/items/process'); ?>" method="post">
    <input type="hidden" name="action" value="add">
    <div class="control-group">
      <label class="control-label" for="itemName">Name</label>
      <div class="controls">
        <input type="text" id="itemName" name="name">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="itemDisName">Display Name</label>
      <div class="controls">
        <input type="text" id="itemDisName" name="display_name">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="itemDesc">Description</label>
      <div class="controls">
        <textarea id="itemDesc" name="description" rows="3"></textarea>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="catWebDesc">Web Description</label>
      <div class="controls">
        <textarea id="catWebDesc" name ="web_description" rows="3"></textarea>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="itemType">Type</label>
      <div class="controls">
        <input type="text" id="itemType" name="type" value="">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="itemLoadOut">Loadout Slot</label>
      <div class="controls">
        <input type="text" id="itemLoadOut" name="loadout_slot" value="">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="itemPrice">Price</label>
      <div class="controls">
        <input type="text" class="input-small" id="itemPrice" name="price" value="">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="itemCat">Category</label>
      <div class="controls">
        <select id="itemCat">
          <option>-- Select Category --</option>
          <?php foreach($categories as $category):?>
          <option><?=$category['display_name']?></option>
          <?php endforeach;?>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="itemAttr">Attributes</label>
      <div class="controls">
        <textarea id="itemAttr" rows="10" name="attrs" class="input-xxlarge"></textarea>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="itemPrice">Is Buyable</label>
      <div class="controls">
        <input type="text" class="input-small" id="itemPrice" name="is_buyable">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="itemPrice">Is Tradeable</label>
      <div class="controls">
        <input type="text" class="input-small" id="itemPrice" name="is_tradeable">
      </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
  </form>