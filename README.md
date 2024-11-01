# My MVC Framework

Framework นี้ออกแบบมาให้ใช้งานบน shared hosting โดยใช้โครงสร้างแบบ MVC และเขียนด้วย PHP แบบ procedural พร้อมรองรับ routing สำหรับทั้งหน้าเว็บและ API

## โครงสร้างโฟลเดอร์
```
/my_mvc_framework
├── /API                 # สำหรับ API Controllers
│   ├── UserAPI.php      # ตัวอย่าง API ที่เกี่ยวกับผู้ใช้
│   └── ProductAPI.php   # ตัวอย่าง API ที่เกี่ยวกับสินค้า
├── /assets              # เก็บไฟล์ static ต่าง ๆ เช่น CSS, JavaScript, รูปภาพ
├── /config              # เก็บไฟล์ config เช่น config.php
│   └── config.php
├── /controllers         # Controller สำหรับหน้าเว็บ
│   └── HomeController.php
├── /route               # Routing ของหน้าเว็บและ API
│   ├── Route_API.php    # Routing ของ API
│   └── Route_Page.php   # Routing ของหน้าเว็บ
├── /view                # ไฟล์ HTML template
└── index.php            # Entry point ของ framework
```

## ขั้นตอนการติดตั้ง
1. อัปโหลด framework ทั้งหมดไปยังโฟลเดอร์ root ของเว็บเซิร์ฟเวอร์
2. แก้ไขไฟล์ `config/config.php` เพื่อตั้งค่าการเชื่อมต่อฐานข้อมูล:
   ```php
   $conn = mysqli_connect('localhost', 'root', 'password', 'database');
   ```

## วิธีการใช้งาน
1. **Routing สำหรับ API**: API route ทั้งหมดที่เริ่มต้นด้วย `api/` จะถูกส่งไปยัง `route/Route_API.php`
   - ตัวอย่าง: การเรียก `localhost/index.php?api/user` จะเรียกไปที่ `API/UserAPI.php`
2. **Routing สำหรับหน้าเว็บ**: หน้าเว็บทั้งหมดที่ไม่ขึ้นต้นด้วย `api/` จะถูกส่งไปยัง `route/Route_Page.php`
   - ตัวอย่าง: การเรียก `localhost/index.php?about` จะไปที่ `controllers/AboutController.php` (ถ้าไฟล์นี้มีอยู่)

3. **เชื่อมต่อฐานข้อมูล**: ใช้ฟังก์ชัน `db_connect()` ที่กำหนดใน `config/config.php` เพื่อเชื่อมต่อฐานข้อมูลแบบ `mysqli`
   - ตัวอย่างการใช้งาน:
     ```php
     $conn = db_connect();
     ```

## ตัวอย่างการสร้าง API
1. ไปที่โฟลเดอร์ `/API` และสร้างไฟล์ใหม่ เช่น `OrderAPI.php`
2. เพิ่มโค้ด API แบบง่าย ๆ:
   ```php
   <?php
   require_once '../config/config.php';

   function getOrders() {
       header('Content-Type: application/json');
       echo json_encode(["message" => "Order data"]);
   }
   ```
3. เพิ่ม route ใหม่ใน `route/Route_API.php`:
   ```php
   if ($route == 'api/orders') {
       include '../API/OrderAPI.php';
       getOrders();
   }
   ```

## การแก้ไข Controller สำหรับหน้าเว็บ
1. ไปที่โฟลเดอร์ `/controllers` และสร้างไฟล์ เช่น `ContactController.php`
2. เพิ่มฟังก์ชันสำหรับแสดงหน้า:
   ```php
   <?php
   function show_contact() {
       echo "This is the contact page.";
   }
   ```
3. เพิ่ม route ใน `route/Route_Page.php`:
   ```php
   if ($route == 'contact') {
       include '../controllers/ContactController.php';
       show_contact();
   }
   ```

## หมายเหตุ
- Framework นี้เขียนแบบ procedural PHP โดยไม่ใช้ object-oriented programming เพื่อความง่ายในการเริ่มต้นใช้งาน
- ระบบนี้เป็นเพียงพื้นฐานเท่านั้น เหมาะสำหรับการพัฒนาขนาดเล็กถึงกลาง และสามารถขยายได้ตามต้องการ
#   M V C - F r a m w o r k 
 
 #   M V C - F r a m w o r k  
 #   M V C - F r a m w o r k  
 