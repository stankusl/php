<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('TemplateTableSeeder');
        $this->call('navigationSeeder');
    }


}

class TemplateTableSeeder extends Seeder {

    public function run()
    {
        DB::table('page_templates')->delete();

        DB::table('page_templates')->insert([
            'name'  => 'Template 1',
            'description' => 'Template with two columns, one column in the middle, parallax, two columns, 3 article pictures',
            'path' => 'regular_template',
        ]);

        DB::table('page_templates')->insert([
            'name'  => 'Template 2',
            'description' => 'Template with two columns, one column in the middle, parallax, two columns, 3 article pictures',
            'path' => 'templateName',
        ]);

        DB::table('page_templates')->insert([
            'name'  => 'Template 3',
            'description' => 'Template with two columns, one column in the middle, parallax, two columns, 3 article pictures',
            'path' => 'templateName',
        ]);

        DB::table('page_templates')->insert([
            'name'  => 'Template 4',
            'description' => 'Template with two columns, one column in the middle, parallax, two columns, 3 article pictures',
            'path' => 'templateName',
        ]);

    }
}

class navigationSeeder extends Seeder {

    public function run()
    {
        /* Navigations */
        DB::table('navigations')->truncate();

        /* Public */
        DB::table('navigations')->insert([
            'name'  => 'cf-genetics',
            'display_name' => 'CF Genetics',
            'position' => '1',
            'status' => '1',
            'type' => '1',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bec8ec',             'colorBg' => '#8193db',
            'locale' => 'en',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'cf-and-cftr',
            'display_name' => 'CF and CFTR',
            'position' => '2',
            'status' => '1',
            'type' => '1',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bec8ec',             'colorBg' => '#8193db',
            'locale' => 'en',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'symptoms',
            'display_name' => 'Symptoms',
            'position' => '3',
            'status' => '1',
            'type' => '1',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bec8ec',             'colorBg' => '#8193db',
            'locale' => 'en',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'living-with-cf',
            'display_name' => 'Living with CF',
            'position' => '4',
            'status' => '1',
            'type' => '1',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bec8ec',             'colorBg' => '#8193db',
            'locale' => 'en',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'resources',
            'display_name' => 'Resources',
            'position' => '5',
            'status' => '1',
            'type' => '1',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bec8ec',             'colorBg' => '#8193db',
            'locale' => 'en',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'healthcare-professional',
            'display_name' => 'Healthcare Professionals',
            'position' => '6',
            'status' => '1',
            'type' => '1',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bec8ec',             'colorBg' => '#8193db',
            'locale' => 'en',
        ]);

        /* Professionals navigations */
        DB::table('navigations')->insert([
            'name'  => 'cftr-science',
            'display_name' => 'CFTR Science',
            'position' => '1',
            'status' => '1',
            'type' => '2',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bcbec0',             'colorBg' => '#808285',
            'locale' => 'en',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'kalydeco',
            'display_name' => 'KALYDECO',
            'position' => '2',
            'status' => '1',
            'type' => '2',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#00aba0',             'colorBg' => '#52247f',
            'locale' => 'en',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'orkambi',
            'display_name' => 'ORKAMBI',
            'position' => '3',
            'status' => '1',
            'type' => '2',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#0aa5b5',             'colorBgHover' => '#d9e145',             'colorBg' => '#0aa5b5',
            'locale' => 'en',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'resources-professional',
            'display_name' => 'Resources',
            'position' => '4',
            'status' => '1',
            'type' => '2',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bcbec0',             'colorBg' => '#808285',
            'locale' => 'en',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'public-site',
            'display_name' => 'Public site',
            'position' => '5',
            'status' => '1',
            'type' => '2',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bec8ec',             'colorBg' => '#8193db',
            'locale' => 'en',
        ]);

        // Spanish

        DB::table('navigations')->insert([
            'name'  => 'cf-geneticses',
            'display_name' => 'CF Geneticses',
            'position' => '1',
            'status' => '1',
            'type' => '3',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bec8ec',             'colorBg' => '#8193db',
            'locale' => 'es',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'cf-and-cftres',
            'display_name' => 'CF and CFTRes',
            'position' => '2',
            'status' => '1',
            'type' => '3',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bec8ec',             'colorBg' => '#8193db',
            'locale' => 'es',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'symptomses',
            'display_name' => 'Symptomses',
            'position' => '3',
            'status' => '1',
            'type' => '3',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bec8ec',             'colorBg' => '#8193db',
            'locale' => 'es',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'living-with-cfes',
            'display_name' => 'Living with CFes',
            'position' => '4',
            'status' => '1',
            'type' => '3',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bec8ec',             'colorBg' => '#8193db',
            'locale' => 'es',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'resourceses',
            'display_name' => 'Resourceses',
            'position' => '5',
            'status' => '1',
            'type' => '3',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bec8ec',             'colorBg' => '#8193db',
            'locale' => 'es',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'healthcare-professionales',
            'display_name' => 'Healthcare Professionalses',
            'position' => '6',
            'status' => '1',
            'type' => '3',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bec8ec',             'colorBg' => '#8193db',
            'locale' => 'es',
        ]);

        /* Professionals navigations */
        DB::table('navigations')->insert([
            'name'  => 'cftr-sciencees',
            'display_name' => 'CFTR Sciencees',
            'position' => '1',
            'status' => '1',
            'type' => '4',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bcbec0',             'colorBg' => '#808285',
            'locale' => 'es',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'kalydecoes',
            'display_name' => 'KALYDECOes',
            'position' => '2',
            'status' => '1',
            'type' => '4',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#00aba0',             'colorBg' => '#52247f',
            'locale' => 'es',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'orkambies',
            'display_name' => 'ORKAMBIes',
            'position' => '3',
            'status' => '1',
            'type' => '4',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#0aa5b5',             'colorBgHover' => '#d9e145',             'colorBg' => '#0aa5b5',
            'locale' => 'es',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'resources-professionales',
            'display_name' => 'Resourceses',
            'position' => '4',
            'status' => '1',
            'type' => '4',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bcbec0',             'colorBg' => '#808285',
            'locale' => 'es',
        ]);

        DB::table('navigations')->insert([
            'name'  => 'public-sitees',
            'display_name' => 'Public sitees',
            'position' => '5',
            'status' => '1',
            'type' => '4',
            'disabled' => '0',
            'color' => '#fff',
            'colorHover' => '#fff',             'colorBgHover' => '#bec8ec',             'colorBg' => '#8193db',
            'locale' => 'es',
        ]);

        /* Site Types */
        DB::table('site_types')->truncate();

        DB::table('site_types')->insert([
            'name'  => 'public',
            'slug'  => 'cftr',
        ]);

        DB::table('site_types')->insert([
            'name'  => 'professional',
            'slug'  => 'hcp',
        ]);

        // Spanish

        DB::table('site_types')->insert([
            'name'  => 'publices',
            'slug'  => 'cftr',
        ]);

        DB::table('site_types')->insert([
            'name'  => 'professionales',
            'slug'  => 'hcp',
        ]);

        /* Page Templates */
        DB::table('page_templates')->truncate();

        DB::table('page_templates')->insert([
            'name'  => 'Main Template',
            'description'  => 'Main page template: header image, title, content',
            'path'  => 'regular'
        ]);

        DB::table('page_templates')->insert([
            'name'  => 'Homepage Template',
            'description'  => 'Homepage template: header image, title, two columns text, center text, parallax image, title 2, two columns text',
            'path'  => 'home'
        ]);

        /* User */
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'username'  => 'luke',
            'password'  => '$2y$10$ljRQRYK9qIKGQ..jABiU9.140fvYrjNtnE6mrQ.btXr.i7Z3bktp.',
            'remember_token' => 'CwbWgjn9xcf130HVXCXs9NXHD6DEsY46BIEfVVd04VJQGI2ofFlXaQBrDyYI',
            'link_hash' => '$2y$10$bAS/0.ixwA5c5mgJHiOk0eqRvRVYh7z7lfsIXwY.SjmEygT8tQDVa',
            'email' => 'luke@codedemon.co.uk',
            'name' => 'Luke Stankus',
            'language' => 'es',
            'user_level' => '1',
            'status' => '1',
        ]);

        DB::table('pages')->truncate();

        DB::table('pages')->insert([
            'name' => 'Cause',
            'slug' => 'cause',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'en',
            'navigation_id' => 1,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 1,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'Mutations',
            'slug' => 'mutations',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'en',
            'navigation_id' => 1,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 1,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'Diagnosis',
            'slug' => 'diagnosis',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'en',
            'navigation_id' => 1,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 1,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'Normal',
            'slug' => 'normal',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'en',
            'navigation_id' => 2,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 1,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'Defective',
            'slug' => 'defective',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'en',
            'navigation_id' => 2,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 1,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'Home',
            'slug' => '',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'en',
            'navigation_id' => 0,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 1,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'Home',
            'slug' => '',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'en',
            'navigation_id' => 0,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 2,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'Normal CFTR',
            'slug' => 'normal-cftr',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'en',
            'navigation_id' => 7,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 2,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'CFTR mutations',
            'slug' => 'cftr-mutations',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'en',
            'navigation_id' => 7,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 2,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'What is Kalydeco',
            'slug' => 'what-is-kalydeco',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'en',
            'navigation_id' => 8,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 2,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'What is Orkambi',
            'slug' => 'what-is-orkambi',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'en',
            'navigation_id' => 9,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 2,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        // Spanish

        DB::table('pages')->insert([
            'name' => 'Causa',
            'slug' => 'causa',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'es',
            'navigation_id' => 12,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 3,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'Mutationa',
            'slug' => 'mutationa',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'es',
            'navigation_id' => 12,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 3,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'Diagnotie',
            'slug' => 'diagnotie',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'es',
            'navigation_id' => 12,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 3,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'Normalska',
            'slug' => 'normalska',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'es',
            'navigation_id' => 13,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 3,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'Defectivie',
            'slug' => 'defectivie',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'es',
            'navigation_id' => 13,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 3,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'Homees',
            'slug' => '',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'es',
            'navigation_id' => 0,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 3,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'Homees',
            'slug' => '',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'es',
            'navigation_id' => 0,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 4,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'Normal CFTRes',
            'slug' => 'normal-cftres',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'en',
            'navigation_id' => 18,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 4,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'CFTR mutationses',
            'slug' => 'cftr-mutationses',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'en',
            'navigation_id' => 18,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 4,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'What is Kalydecoes',
            'slug' => 'what-is-kalydecoes',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'en',
            'navigation_id' => 19,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 4,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);

        DB::table('pages')->insert([
            'name' => 'What is Orkambies',
            'slug' => 'what-is-orkambies',
            'data' => json_encode(['title' => str_random(20), 'mainText' => '<p>Hello WorldLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis lorem quis hendrerit scelerisque. Ut porta eu ex vitae mattis. Nunc tempor augue magna, ut pulvinar erat feugiat eget. Aenean accumsan bibendum feugiat. Nulla vel malesuada ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse neque elit, cursus posuere nunc non, tristique aliquet nulla. Quisque molestie turpis sit amet nibh consectetur, at consectetur justo congue.\\nDonec ac diam metus. Duis nunc erat, elementum tincidunt accumsan ac, pretium ut ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer laoreet tempus orci eu auctor. Ut feugiat dolor scelerisque efficitur lobortis. Praesent ut nisl bibendum, porta nunc eu, elementum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In felis augue, tempus non enim ut, bibendum rhoncus mauris.\\nInteger et nisi velit. Proin lobortis quam in urna feugiat, eu facilisis lectus commodo. In varius convallis mollis. Nullam sagittis rutrum dui non volutpat. Donec tempus volutpat quam iaculis dapibus. Ut sed viverra libero, in elementum urna. Maecenas finibus vitae lacus ac dapibus. Nullam augue nunc, dictum in sollicitudin vel, sodales semper lectus. Morbi porta porttitor nibh ut dictum.\\nQuisque feugiat mauris ac sodales pellentesque. Pellentesque eu velit urna. Vivamus consequat mollis viverra. Aenean vel risus sapien. Aliquam erat volutpat. Integer malesuada erat eget dolor dapibus imperdiet. Donec porta fermentum urna vel dignissim.\\nQuisque scelerisque lacinia metus a luctus. Praesent quis interdum lacus, ac lobortis justo. Ut ut augue tincidunt ex fringilla interdum. Proin in aliquam felis. Suspendisse luctus, ipsum vel rutrum pharetra, lacus elit varius diam, varius viverra massa massa in purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a cursus eros. Mauris et cursus libero, quis tempor arcu. Vestibulum eget nibh quis eros hendrerit feugiat. Aenean eget interdum arcu. In placerat vulputate odio eu facilisis. Sed hendrerit venenatis augue eget suscipit. Quisque mattis ligula sit amet justo hendrerit eleifend. Fusce ornare mollis sem ut sagittis.</p>', 'uploadFile' => null]),
            'template' => rand(1, 2),
            'locale' => 'en',
            'navigation_id' => 20,
            'status' => 0,
            'position' => rand(1, 7),
            'site_id' => 4,
            'created_by' => rand(1, 2),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
    }
}
