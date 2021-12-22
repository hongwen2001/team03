<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Scalar\String_;
use Psy\Util\Str;

class ClassesTableSeeder extends Seeder
{
    public function get_department($i,$dep_number,$total){
        $departments=array("電子系","美術系","體育系","化學系","醫學系","飛機系","汽修系","遊戲系","體育系","化材系","數學系");

        return $departments[(int)($i%$total/$dep_number)];
    }
    public function get_classname($i,$classname_number){
        $english=array("A","B","C","D","E","F");

        return $english[$i%$classname_number];
    }
    public function get_grede($i,$dep_number){
        return (int)($i/$dep_number)+1;
    }
    public function get_classroom($i,$classroom_number,$dep_number,$total){
        $english=array("A","B","C","D","E","F");
        $basic_floor=100;
        $classroom=$english[($i%$total/$dep_number)/$dep_number].($basic_floor+($i%$classroom_number+1)+(int)(($i%$dep_number)/$classroom_number)*100);
        return $classroom;
    }public function get_teacher(){
    $first_name="趙錢孫李　周吳鄭王馮陳褚衛　蔣沈韓楊朱秦尤許　何呂施張孔曹嚴華　金魏陶姜戚謝鄒喻　栢水竇章雲蘇潘葛　奚范彭郎魯韋昌馬　苗鳳花方俞任袁柳　酆鮑史唐費廉岑薛　雷湯滕殷羅畢　郝鄔安常樂于時傅　皮卞齊康伍余元卜　顧孟平黃和穆蕭尹　姚邵湛汪祁毛禹狄　米貝明臧計伏成戴　談宋茅龎熊舒屈　項祝董梁杜阮藍閔
        　席季麻強賈路婁危　江童顏郭梅盛林刁　鍾徐邱駱高夏蔡田　樊胡凌霍虞萬支柯　昝管盧莫經房裘繆　干解應宗丁宣賁鄧　郁單杭洪包諸左石　崔吉鉏龔程嵇邢滑　裴陸榮翁於羊惠　甄麴家封芮羿儲靳　汲邴糜松井段富巫　烏焦巴弓牧隗山谷　車侯宓蓬全郗班仰　秋仲伊宮甯仇欒暴　甘針厲戎祖武符劉　景詹束龍葉幸司韶　
        郜黎薊薄印宿白懷　蒲邰從鄂索咸籍賴　卓藺屠蒙池喬陰鬱　胥能蒼雙聞莘党翟　譚貢勞申扶堵　冉宰酈雍郤璩桑桂　濮牛壽邊扈燕翼　郟浦尚農溫別莊晏　柴瞿閻充慕茹習
        　宦艾魚容向古易慎　戈廖庾終暨居衡步　都滿弘匡國文寇　廣祿闕東歐殳沃利　蔚越夔隆師鞏庫聶　晁勾敖融冷訾辛闞　那簡饒空曾毋沙乜　養鞠須豐巢關蒯相　查后荊紅游竺權　蓋益桓公万俟司馬　上官歐陽夏侯諸葛　聞人東方赫皇甫　尉遲公羊澹臺公冶　宗政濮陽淳于單于　太叔申屠公孫仲孫　軒轅令狐鍾離宇文　長孫慕容鮮于閭丘　司徒司空丌官司寇　
        仉督子車顓孫端木　巫馬公西漆雕樂正　壤駟公良拓跋夾谷　宰父梁晉楚閆法　汝鄢涂欽段干百里　東郭南呼延歸海　羊舌微生岳帥緱亢　況後有琴梁丘左丘　東西商牟佘佴　伯賞南宮墨哈譙笪　年愛陽佟第五福　百家姓終";
    $first_name=preg_replace('/[\s|　]+/','',$first_name);
    $first_name=str_replace(' ',"",$first_name);
    error_log($first_name);
    $two_name="禚方雅半凡北涵润天舒柯芳林钦风华钮晴丽锺芮欢求乐芸蒲添泥端懿屠叶农白棠华智念文梁以晴慕高澹绳以彤苑乐蕊红鸿光声艳蕊空文瑞苗芸
        馨波初南沐迎秋桂鸿运公巧云谏洮洮闭郁茂晓瑶隐弘济休依云邸雅美续瑜敏苍湛蓝关笑寒颛孙悦来康歌阑郁建茗公叔凌兰那拉小凝竭和泽阿清宁年念柏东方元凯
        释成龙邓飞英玄情刘岳北辰匡长岳魏勇任灵凡笪巍昂米智阳从菡受洁睢小蕊宗政从冬芮梅丰又菡能多宿弘和项安平督丹彤丛玉环伦嘉伟听前半蕾
        璇甄梦容宾晓畅丁景福茅依琴章佳飞雪尉洲畅莎莎完颜珍牛运锋覃小星衷唱之秋灵罗清昶风魁蔚良吉封青易解傲菡禾乐心终海昌莱鸿信费莫湛霞佛和税宏才愚水
        蕊辜山修晓灵赫志学敏浩然京柔洁闽凡桃拱禄卜鸿飞玉赞百意智门珠佩赖玉石达邈安荣姒曼青蹇灵萱潭季萌紫和平翟蓓斐翎富天青韩安娴函秋白强彭利白易偶
        梦全阳德素亦云干远航光冰洁唐博超公孙惜玉施悦欣辟盼波李鹏鲸荆懿轩道茹毛笑雯坚曼蔓漆雕正豪晋箫笛合访烟凭溶生驹查琼虞木兰南门笑天曲叶飞敬黛娥
        廖彦慧邛婉然秦林楠沙平惠那天媛友迎夏堂彭勃伊俊晤母元绿程盈功壁平彭肖雅媚缑书撒梓琬武和种莺韵滑叶彤";
    $two_name=preg_replace('/[\s|　]+/','',$two_name);
    $two_name=str_replace(' ',"",$two_name);
    $first_name_array=array();
    $two_name_array=array();
    for ($i=0;$i<mb_strlen($first_name,'utf-8');$i++){
        $first_name_array[]=mb_substr($first_name,$i,1,'utf-8');
    }
    for ($ii=0;$ii<mb_strlen($two_name,'utf-8');$ii++){
        $two_name_array[]=mb_substr($two_name,$ii,1,'utf-8');
    }
    return $first_name_array[rand(0,count($first_name_array)-1)].$two_name_array[rand(0,count($two_name_array)-1)].$two_name_array[rand(0,count($two_name_array)-1)];
}
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $total_classnumber=18;
        $dep_totoalnumber=3;
        $dep_number=(int)($total_classnumber/3)/$dep_totoalnumber;
        $grede_number=(int)($total_classnumber/3);
        $classroom_number=4;


        for ($i=0;$i<$total_classnumber;$i++) {
            DB::table('classes')->insert([
                'department' => $this->get_department($i,$dep_number,$total_classnumber/$dep_totoalnumber),
                'classname'=>$this->get_classname($i,$dep_number),
                'grede'=>$this->get_grede($i,$grede_number),
                'classroom'=>$this->get_classroom($i,$classroom_number,$dep_number,$total_classnumber/$dep_totoalnumber),
                'teacher'=>$this->get_teacher()
            ]);
        }
    }
}
