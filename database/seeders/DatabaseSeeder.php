<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {


      $categories= [

        ['id' => 1 , 'name' => 'خضراوات' ,'description' => 'يوجد افضل انواع الخضراوات','imagepath' => 'assets\img\category/خضراوات.jpg'],
        ['id' => 2 , 'name' => 'فواكة' ,'description' => 'الفواكة من جميع انحاء العالم','imagepath' => 'assets\img\category/فواكة.webp'],
        ['id' => 3 , 'name' => 'مشروبات باردة' ,'description' => 'الجو حر نعنش نفسك','imagepath' => 'assets\img\category/مشروبات باردة.jpg'],
        ['id' => 4 , 'name' => 'مشروبات ساخنة' ,'description' => 'الجو برد دفى نفسك','imagepath' => 'assets\img\category/مشروبات ساخنة تانى.jpg'],
        ['id' => 5 , 'name' => 'اجبان' ,'description' => 'كل ما تشتهية من اجبان','imagepath' => 'assets\img\category/اجبان.jpg'],
        ['id' => 6 , 'name' => 'منظفات' ,'description' => 'اجعل بيتك نظيفا','imagepath' => 'assets\img\category/منظفات.png'],
      
    ];
        // Insert categories into the database
        DB::table('categories')->insertOrIgnore($categories);
        
        
      $products= [
         ['id' => 1 , 'name' => 'خيار' ,'description' => 'خيار طازج جدا' ,'price' => 14 , 'quantity' => 100 , 'imagepath' => 'assets\img\product/خيار.jpg' , 'category_id' => 1],
         ['id' => 2 , 'name' => 'بطيخ' ,'description' => 'بطيخ احمر على ابوة' ,'price' => 120 , 'quantity' => 50 , 'imagepath' => 'assets\img\product/بطيخ.jpg' , 'category_id' => 2],
         ['id' => 3 , 'name' => 'عصير برتقال' ,'description' => 'عصير برتقال طازج' ,'price' => 43 , 'quantity' => 30 , 'imagepath' => 'assets\img\product/عصير برتقال.jpg', 'category_id' => 3],
         ['id' => 4 , 'name' => 'سحلب' ,'description' => 'سحلب سخن بالمكسرات' ,'price' => 22 , 'quantity' => 20 , 'imagepath' => 'assets\img\product/سحلب.jpg', 'category_id' => 4],
         ['id' => 5 , 'name' => 'جبنة رومى', 'description'=> 'جبنة رومى قديمة', 'price'=> 40, 'quantity'=> 15, 'imagepath'=> '/assets/img/product/جبنة رومى.jpg', 'category_id'=>5],
         ['id'=>6,'name'=>'مسحوق','description'=>'منظف غسيل فعال','price'=>22.50,'quantity'=>25,'imagepath'=>'/assets/img/product/مسحوق.png','category_id'=>6],
         ['id'=>7,'name'=>'عصير مانجة','description'=>'عصير مانجة عويسى','price'=>65,'quantity'=>40,'imagepath'=>'/assets/img/product/عصير مانجة.jpg','category_id'=>3],
         ['id'=>8,'name'=>'ينسون','description'=>'ينسون اعشاب ساخن','price'=>19.25,'quantity'=>10,'imagepath'=>'/assets/img/product/ينسون.png','category_id'=>4],
         ['id'=>9,'name'=>'جبنة بيضاء','description'=>'جبنة بيضاء ملح خفيف','price'=>59,'quantity'=>12,'imagepath'=>'/assets/img/product/جبنة بيضاء.png','category_id'=>5],
         ['id'=>10,'name'=>'مسحوق تايد','description'=>'غسيلك بدون بقعة واحدة','price'=>37,'quantity'=>18,'imagepath'=>'/assets/img/product/تايد.png','category_id'=>6],
         ['id'=>11,'name'=>'عصير بطيخ','description'=>'عصير بطيخ احمر','price'=>30,'quantity'=>20,'imagepath'=>'/assets/img/product/عصير بطيخ.png','category_id'=>3],
         ['id'=>13,'name'=>'جبنة فلمنك','description'=>'جبنة فلمنك اجود الانواع','price'=>140,'quantity'=>8,'imagepath'=>'/assets/img/product/جبنة فلمنك.png','category_id'=>5],
         ['id'=>14,'name'=>'صابون سايل','description'=>'منظف مواعين فعال','price'=>18,'quantity'=>30,'imagepath'=>'/assets/img/product/صابون سايل.png','category_id'=>6],        
         ['id'=>17,'name'=>'جبنة قريش','description'=>'جبنة قريش طازجة','price'=>45,'quantity'=>10,'imagepath'=>'/assets/img/product/جبنة قريش.png','category_id'=>5],
     

      ];
        // Insert products into the database
        DB::table('products')->insertOrIgnore($products);

   
    }
}
