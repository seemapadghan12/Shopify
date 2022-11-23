<?php
namespace UnitTest\Test ;
use PHPUnit\Framework\TestCase ;
require 'D:/xampp/htdocs/Ecommerce-main/Ecommerce-main/components/user_model.php';
require 'D:/xampp/htdocs/Ecommerce-main/Ecommerce-main/components/connect.php';


class testcases extends TestCase
{
    public function testUpdateOrderStatus()
    {
        $admin_id=1;
        // $admin_id=6;
        $this->assertSame(-1,getTotalPendings($admin_id));
    }

    public function testUpdateProfile()
    {
        $admin_id=1;
        // $admin_id=6;
        $this->assertSame(1,updateAdminProfile($admin_id));
    }

    public function testUpdateAddProducts()
    {
        $admin_id=1;
        // $admin_id=6;
        $this->assertSame(-1,getProductsAdded($admin_id));
    }

    public function testManageUsers()
    {
        $admin_id=1;
        // $admin_id=6;
        $this->assertSame(-1,getNumUsers($admin_id));
    }

    public function testManageAdmins()
    {
        $admin_id=1;
        // $admin_id=6;
        $this->assertSame(-1,getAdminUsers($admin_id));
    }


}

