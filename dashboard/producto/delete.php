<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar Producto");
require_once("../../app/controllers/dashboard/producto/delete_controller.php");
Page::templateFooter();
?>