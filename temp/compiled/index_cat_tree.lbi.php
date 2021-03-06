
<?php $_from = $this->_var['child_tree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['nocat_id'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nocat_id']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['nocat_id']['iteration']++;
?>
<dl class="dl_fore<?php echo $this->_foreach['nocat_id']['iteration']; ?>">
    <dt><a href="<?php echo $this->_var['child']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['child']['cat_name']); ?></a></dt>
    <dd>
        <?php $_from = $this->_var['child']['child_tree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['nochild_cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nochild_cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['nochild_cat']['iteration']++;
?>
        <a href="<?php echo $this->_var['cat']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </dd>
</dl>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<div class="item-brands">
    <ul>
        <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['cat_brand'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_brand']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['cat_brand']['iteration']++;
?>
        <li class="brand-fore<?php echo $this->_foreach['cat_brand']['iteration']; ?>">
        <a href="<?php echo $this->_var['brand']['url']; ?>" target="_blank" title="<?php echo $this->_var['brand']['brand_name']; ?>"><img src="<?php echo $this->_var['brand']['brand_logo']; ?>" width="91" height="40" /></a>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>
<div class="item-promotions">
    <?php $_from = $this->_var['ad_position']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('pkey', 'posti');if (count($_from)):
    foreach ($_from AS $this->_var['pkey'] => $this->_var['posti']):
?>
    <a href="<?php echo $this->_var['posti']['ad_link']; ?>" target="_blank"><img width="<?php echo $this->_var['posti']['ad_width']; ?>" height="<?php echo $this->_var['posti']['ad_height']; ?>" src="<?php echo $this->_var['posti']['ad_code']; ?>" /></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>

