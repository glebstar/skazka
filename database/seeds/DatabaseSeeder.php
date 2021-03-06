<?php

use Illuminate\Database\Seeder;
use App\Cms;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cms')->delete();
        
        Cms::create(array(
            'title' => '',
            'path' => '',
            'body' => 'PHAgY2xhc3M9InN0aWgiPtCc0L3QvtCz0L4g0LXRgdGC0Ywg0YHQsNC00L7QsiDQvdCwINGB0LLQtdGC0LUsPGJyIC8+CtCd0L4g0YLQsNC60L7QuSwg0LrQsNC6INC90LDRiCDQvtC00LjQvS48YnIgLz4K0JjQvdGC0LXRgNC10YHQvdC+INCyINC90ZHQvCDQstGB0LXQvCDQtNC10YLRj9C8LDxiciAvPgrQntC9INC00LvRjyDQvdC40YUg0L3QtdC+0LHRhdC+0LTQuNC8LjxiciAvPjxiciAvPgoK0JfQtNC10YHRjCDRgNCw0LHQvtGC0LDRjtGCINGBINC00YPRiNC+0Y48YnIgLz4K0J/QtdC00LDQs9C+0LPQuCAtINC80LDRgdGC0LXRgNCwPGJyIC8+CtCW0LDRgNC60LjQvCDQu9C10YLQvtC8INC4INC30LjQvNC+0Y48YnIgLz4K0J/RgNGP0LzQviDRgSDRgNCw0L3QvdC10LPQviDRg9GC0YDQsC48YnIgLz48YnIgLz4KCtCS0LDRiCDRgNC10LHRkdC90L7QuiDRgdC70LDQsSDQt9C00L7RgNC+0LLRjNC10Lw/PGJyIC8+CtCd0LUg0LLQvtC70L3Rg9C50YLQtdGB0Ywg0JLRiyDQviDQvdGR0Lw8YnIgLz4K0JLQuNGC0LDQvNC40L3Riywg0YHQvtC6LCDQvtGC0LLQsNGA0Ys8YnIgLz4K0J7QvSDQv9C+0LvRg9GH0LjRgiDQtNC10L3RjCDQt9CwINC00L3RkdC8LjxiciAvPjxiciAvPgoK0JfQsNC60LDQu9GP0YLRjCDQtdCz0L4g0LfQtNC10YHRjCDRgdGC0LDQvdGD0YIsPGJyIC8+CtCR0YPQtNGD0YIg0LIg0YTQuNGC0L7QsdCw0YAg0LLQvtC00LjRgtGMLjxiciAvPgrQmCDQvdCw0YPRh9Cw0YIg0YEg0YTQuNC30LrRg9C70YzRgtGD0YDQvtC5PGJyIC8+CtCa0YDQtdC/0LrQvi3QvdCw0LrRgNC10L/QutC+INC00YDRg9C20LjRgtGMLjxiciAvPjxiciAvPgoK0KfRgtC+0LEg0YEg0LjRgdC60YPRgdGB0YLQstC+0Lwg0LHRi9GC0Ywg0L3QsCAi0YLRiyIsPGJyIC8+CtCU0LvRjyDQutGA0LDRgdC+0YLRiyDQv9C+0LfQvdCw0L3QuNGPIC0gPGJyIC8+CtCY0JfQniwg0LzRg9C30YvQutCwLCDRgtC10LDRgtGALDxiciAvPgrQodGC0YPQtNC40Y8g0LTQuNC30LDQudC90LAuPGJyIC8+PGJyIC8+CgrQoyDQvdCw0YEg0YLRgNGD0LTQuNGC0YHRjyDQv9GB0LjRhdC+0LvQvtCzLDxiciAvPgrQldGB0YLRjCDRjdC60L7Qu9C+0LMsINC70L7Qs9C+0L/QtdC0LjxiciAvPgrQnNC90L7QttC10YHRgtCy0L4g0YHQsNC00L7QsiDQvdCwINGB0LLQtdGC0LUsPGJyIC8+CtCd0L4g0YLQsNC60L7Qs9C+INC90LjQs9C00LUg0L3QtdGCLjxiciAvPjxiciAvPgoKPC9wPgo8YnIgLz4KCjxzcGFuIGNsYXNzPSJwcmltIj4K0JTQuNC00LXQvdC60L4g0JUu0JAuPGJyIC8+CtCc0YPQt9GL0LrQsNC70YzQvdGL0Lkg0YDRg9C60L7QstC+0LTQuNGC0LXQu9GMINC0L9GBIOKEliA0MiAi0KHQutCw0LfQutCwIjxiciAvPgo8L3NwYW4+',
            'is_main' => 0
            ));
        
        Cms::create(array(
            'title' => 'Тестовая страница CMS',
            'path' => 'my-test',
            'body' => base64_encode('<p>Тестовая страница</p>'),
            'is_main' => 1
            ));
        
        Cms::create(array(
            'title' => 'Тестовая страница CMS2',
            'path' => 'my-test/test',
            'body' => base64_encode('<p>Тестовая страница - 2</p>'),
            'is_main' => 1
            ));
        
        DB::table('users')->delete();
        User::create(array(
            'login' => 'admin',
            'password' => bcrypt('admin'),
            'role' => 1
            ));
    }
}
