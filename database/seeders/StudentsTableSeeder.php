<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Scalar\String_;


class StudentsTableSeeder extends Seeder
{
    public function get_name(){
        $first_name="趙錢孫李　周吳鄭王馮陳褚衛　蔣沈韓楊朱秦尤許　何呂施張孔曹嚴華　金魏陶姜戚謝鄒喻　栢水竇章雲蘇潘葛　奚范彭郎魯韋昌馬　苗鳳花方俞任袁柳　酆鮑史唐費廉岑薛　雷賀倪湯滕殷羅畢　郝鄔安常樂于時傅　皮卞齊康伍余元卜　顧孟平黃和穆蕭尹　姚邵湛汪祁毛禹狄　米貝明臧計伏成戴　談宋茅龎熊紀舒屈　項祝董梁杜阮藍閔
        　席季麻強賈路婁危　江童顏郭梅盛林刁　鍾徐邱駱高夏蔡田　樊胡凌霍虞萬支柯　昝管盧莫經房裘繆　干解應宗丁宣賁鄧　郁單杭洪包諸左石　崔吉鉏龔程嵇邢滑　裴陸榮翁荀於羊惠　甄麴家封芮羿儲靳　汲邴糜松井段富巫　烏焦巴弓牧隗山谷　車侯宓蓬全郗班仰　秋仲伊宮甯仇欒暴　甘針厲戎祖武符劉　景詹束龍葉幸司韶　
        郜黎薊薄印宿白懷　蒲邰從鄂索咸籍賴　卓藺屠蒙池喬陰鬱　胥能蒼雙聞莘党翟　譚貢勞逄姬申扶堵　冉宰酈雍郤璩桑桂　濮牛壽通邊扈燕翼　郟浦尚農溫別莊晏　柴瞿閻充慕連茹習
        　宦艾魚容向古易慎　戈廖庾終暨居衡步　都耿滿弘匡國文寇　廣祿闕東歐殳沃利　蔚越夔隆師鞏庫聶　晁勾敖融冷訾辛闞　那簡饒空曾毋沙乜　養鞠須豐巢關蒯相　查后荊紅游竺權逯　蓋益桓公万俟司馬　上官歐陽夏侯諸葛　聞人東方赫連皇甫　尉遲公羊澹臺公冶　宗政濮陽淳于單于　太叔申屠公孫仲孫　軒轅令狐鍾離宇文　長孫慕容鮮于閭丘　司徒司空丌官司寇　
        仉督子車顓孫端木　巫馬公西漆雕樂正　壤駟公良拓跋夾谷　宰父穀梁晉楚閆法　汝鄢涂欽段干百里　東郭南門呼延歸海　羊舌微生岳帥緱亢　況後有琴梁丘左丘　東門西門商牟佘佴　伯賞南宮墨哈譙笪　年愛陽佟第五言福　百家姓終";
        $first_name=trim($first_name);

    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            'student_id'=>'S210001',
            'seat_number'=>'1',
            'name'=>'許有恆',
            'gender'=> 'M',
            'cid'=>1,
            'graduation_date'=>'2001-12-13',
            'start_date'=>'2020-05-06',
            'seat'=>'2,0',
            'country'=>'馬來西亞'
        ]);
    }
}
