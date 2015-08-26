<?php

# Users
$app->group('/users', function() use ($app){
    
    $app->get("/"     , "userController:get_itens");
    $app->get("/:id"   , "userController:get_item");
    $app->post("/create"   , "userController:insert");
    $app->put("/update/:id"   , "userController:update");
    $app->delete("/remove"   , "userController:remove");
});

#Login
$app->group('/login', function() use ($app){
    
    $app->post("/"   , "loginController:index");
});