<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Users
        DB::table('users')->insert([
            ['name'=>'Alex Morgan','email'=>'alex@freelancehub.app','password'=>Hash::make('password'),'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Sasha Williams','email'=>'sasha@pixelcraft.io','password'=>Hash::make('password'),'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Priya Shah','email'=>'priya@writer.co','password'=>Hash::make('password'),'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Marcus Chen','email'=>'marcus@forgeapi.dev','password'=>Hash::make('password'),'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Jordan Lee','email'=>'jordan@motion.tv','password'=>Hash::make('password'),'created_at'=>now(),'updated_at'=>now()],
        ]);

        // Jobs
        DB::table('job_postings')->insert([
            ['title'=>'Senior React Engineer','company'=>'Pixelcraft Studio','company_initial'=>'PS','category'=>'Development','rate'=>95,'hours'=>80,'skills'=>json_encode(['React','TypeScript','GraphQL']),'description'=>'Build a refreshed dashboard experience.','status'=>'Open','type'=>'Hourly','posted_at'=>'2026-06-18','applicants'=>14,'email'=>'hire@pixelcraft.io','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Brand Identity Designer','company'=>'Northwind Coffee','company_initial'=>'NC','category'=>'Design','rate'=>70,'hours'=>40,'skills'=>json_encode(['Figma','Branding']),'description'=>'Refresh our coffee chain identity.','status'=>'Open','type'=>'Fixed','posted_at'=>'2026-06-15','applicants'=>32,'email'=>'design@northwind.co','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Technical Writer','company'=>'Forge API','company_initial'=>'FA','category'=>'Writing','rate'=>55,'hours'=>60,'skills'=>json_encode(['Copywriting','TypeScript']),'description'=>'Author developer documentation.','status'=>'In Progress','type'=>'Hourly','posted_at'=>'2026-06-10','applicants'=>9,'email'=>'team@forgeapi.dev','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Data Engineer','company'=>'Lumen Health','company_initial'=>'LH','category'=>'Data','rate'=>110,'hours'=>120,'skills'=>json_encode(['Python','AWS']),'description'=>'Design ETL pipelines for clinical data.','status'=>'Open','type'=>'Hourly','posted_at'=>'2026-06-20','applicants'=>6,'email'=>'talent@lumenhealth.com','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Product Marketing Lead','company'=>'Orbital Apps','company_initial'=>'OA','category'=>'Marketing','rate'=>85,'hours'=>50,'skills'=>json_encode(['SEO','Copywriting']),'description'=>'Own GTM for our mobile launch.','status'=>'Completed','type'=>'Fixed','posted_at'=>'2026-05-22','applicants'=>21,'email'=>'hr@orbital.app','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Video Editor','company'=>'Cascade Media','company_initial'=>'CM','category'=>'Video','rate'=>45,'hours'=>30,'skills'=>json_encode(['Premiere','Motion']),'description'=>'Edit weekly long-form videos.','status'=>'Open','type'=>'Hourly','posted_at'=>'2026-06-19','applicants'=>18,'email'=>'edit@cascade.media','created_at'=>now(),'updated_at'=>now()],
        ]);

        // Applications
        DB::table('applications')->insert([
            ['job_id'=>1,'job_title'=>'Senior React Engineer','company'=>'Pixelcraft Studio','applied_at'=>'2026-06-19','rate'=>95,'hours'=>80,'status'=>'Reviewed','applicant_name'=>'Alex Morgan','created_at'=>now(),'updated_at'=>now()],
            ['job_id'=>2,'job_title'=>'Brand Identity Designer','company'=>'Northwind Coffee','applied_at'=>'2026-06-16','rate'=>70,'hours'=>40,'status'=>'Pending','applicant_name'=>'Alex Morgan','created_at'=>now(),'updated_at'=>now()],
            ['job_id'=>4,'job_title'=>'Data Engineer','company'=>'Lumen Health','applied_at'=>'2026-06-20','rate'=>110,'hours'=>120,'status'=>'Accepted','applicant_name'=>'Alex Morgan','created_at'=>now(),'updated_at'=>now()],
            ['job_id'=>5,'job_title'=>'Product Marketing Lead','company'=>'Orbital Apps','applied_at'=>'2026-05-24','rate'=>85,'hours'=>50,'status'=>'Rejected','applicant_name'=>'Alex Morgan','created_at'=>now(),'updated_at'=>now()],
        ]);

        // Payments
        DB::table('payments')->insert([
            ['job_title'=>'Senior React Engineer','client'=>'Pixelcraft','hours'=>32,'rate'=>95,'status'=>'Paid','date'=>'2026-06-01','created_at'=>now(),'updated_at'=>now()],
            ['job_title'=>'Brand Identity Designer','client'=>'Northwind','hours'=>18,'rate'=>70,'status'=>'Paid','date'=>'2026-05-18','created_at'=>now(),'updated_at'=>now()],
            ['job_title'=>'Data Engineer','client'=>'Lumen Health','hours'=>40,'rate'=>110,'status'=>'Processing','date'=>'2026-06-15','created_at'=>now(),'updated_at'=>now()],
            ['job_title'=>'Technical Writer','client'=>'Forge API','hours'=>24,'rate'=>55,'status'=>'Pending','date'=>'2026-06-20','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}