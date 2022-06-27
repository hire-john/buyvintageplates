<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // $this->seedAll();
        $this->call(PlateCollectionsTableSeeder::class);
        $this->call(PlateArtistsTableSeeder::class);
        
    }

    private function seedAll(){
        $this->call(AuthUsersTableSeeder::class);
        $this->call(AuthPermissionsTableSeeder::class);
        $this->call(AuthRolesTableSeeder::class);
        $this->call(InputFieldDescriptionsTableSeeder::class);
        $this->call(MetaProductConditionsSeeder::class);
        $this->call(MetaArtThemesTableSeeder::class);
        $this->call(MetaCharactersTableSeeder::class);
        $this->call(MetaCulturesTableSeeder::class);
        $this->call(MetaDecorStylesTableSeeder::class);
        $this->call(MetaErasTableSeeder::class);
        $this->call(MetaFranchisesTableSeeder::class);
        $this->call(MetaOccasionsTableSeeder::class);
        $this->call(MetaBrandsTableSeeder::class);
        $this->call(MetaProductCategoriesTableSeeder::class);
        $this->call(MetaShapesTableSeeder::class);
        $this->call(RouteMetadataTableSeeder::class);
        $this->call(MetaYearsTableSeeder::class);
        
    }
}
