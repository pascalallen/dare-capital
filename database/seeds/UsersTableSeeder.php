<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        factory(App\User::class)->create([
            'name' => 'Cole Harmonson',
            'email' => 'cole@darebizcapital.com',
            'bio' => 'Cole Harmonson is the CEO and co-founder of Dare Capital, a privately held commercial lending company that provides critical working capital financing to entrepreneurs determined to improve their companies, their lives, and the world. From the very beginning of his career, as a young banker, Cole recognized the transformative value of factoring and asset-based lending to manage cashflow for growing companies without impacting equity. In 1996, he founded State Bank’s factoring and asset based lending business; when they sold their business in 2007, Cole took the leap into entrepreneurship and founded Far West Capital to provide financing to entrepreneurs. For 11 years, Far West Capital provided over $6 billion in financing to grow over 1,000 companies to new heights of success; in 2018, Far West Capital sold to Central Bank of Houston in a successful bank exit.

Dare means “to give” in Latin, and at Dare Capital, Cole is building on the lessons learned at Far West Capital to support entrepreneurs who truly give to all their stakeholders. Cole believes that factoring and asset-based lending, when utilized for growing companies with committed leaders, can and should be the foundation for long-term growth.
',
        ]);

        factory(App\User::class)->create([
            'name' => 'Beth Carpenter',
            'email' => 'beth@darebizcapital.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Debra',
            'email' => 'debra@darebizcapital.com',
        ]);
    }
}
