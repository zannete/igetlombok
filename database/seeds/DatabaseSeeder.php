<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run(){
    // $this->call(UsersTableSeeder::class);
    $this->call([
      PlacesTableSeeder::class,
      GroupOfPlacesTableSeeder::class,
      PlacesHasGroupOfPlacesTableSeeder::class,
      CompaniesTableSeeder::class,
      VesselsTableSeeder::class,
      VesselsHasRoutesSeeder::class,
      RoutesTableSeeder::class,
      NationalitiesTableSeeder::class,
      PaymentMethodsTableSeeder::class,
      PaymentStatusesTableSeeder::class,
      CurrenciesTableSeeder::class,
      ComplaintTypesTableSeeder::class,
      ComplaintStatusesTableSeeder::class,
      ToursTableSeeder::class,
      TourPackagesTableSeeder::class,
      TourItenariesTableSeeder::class,
      TourIncludesTableSeeder::class,
      TourExcludesTableSeeder::class,
      TourWhatToBringTableSeeder::class,
      AdminsTableSeeder::class,
      PostCategoriesTableSeeder::class,
      PostsTableSeeder::class
    ]);
  }
}
