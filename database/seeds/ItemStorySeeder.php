<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   DB::table('items')->insert([
    
[
'id' =>6,
'gender' => 2,
'items' => 'プラダの財布',
'story' => '恋人からのプレゼント。好きなものを選んでいいって言ってくれたけど、学生同士だし、気を遣う…でも、憧れのブランド！もらえてうれしい',
'price' => 50000,
'kind' => 4,
'item_brand' => 'プラダ　財布',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/culture/cabinet/1710-pic31/pr-1mh176qwaf0002_1.jpg'
],
[
'id' =>7,
'gender' => 2,
'items' => ' RMKのリップグロス',
'story' => 'おしゃれ好きなあの子へのプレゼント！予算もちょうどよし。',
'price' => 2000,
'kind' => 2,
'item_brand' => 'RMK　リップグロス',
'img_path'=>'https://tshop.r10s.jp/benavi/cabinet/06/rmk123006_1.jpg?downsize=250:*'
],
[
'id' =>8,
'gender' => 2,
'items' => ' gelato piqueのブランケット',
'story' => 'ふわふわ好き女子には間違いないブランド。ブランケットだとオフィスでも使えるし、かわいさも実用性もばっちり！',
'price' => 6000,
'kind' => 2,
'item_brand' => 'ジェラートピケ　ブランケット　レディース',
'img_path'=>'https://image.rakuten.co.jp/muselect/cabinet/item15/pmnt175918_1.jpg'
],
[
'id' =>9,
'gender' => 1,
'items' => '自転車ヘルメット',
'story' => '自転車が趣味なあの人に。アクティブな週末を過ごそう！',
'price' => 30000,
'kind' => 4,
'item_brand' => '自転車ヘルメット',
'img_path'=>'https://tshop.r10s.jp/jitensya-ousama/cabinet/bell/p-bell-hlmt128.jpg'
],
[
'id' =>10,
'gender' => 2,
'items' => 'kate spadeの定期入れ',
'story' => '定期入れはいつも持ち歩くものだし、実用性もあるからうれしかった！！だけど、色があんまり好きじゃなかったなー。いつも持ち歩くものだからこそ、色やデザインは重要かも！！相手が好きな色や似合いそうなデザインをチェックしてみて！',
'price' => 10000,
'kind' => 4,
'item_brand' => 'ケイトスペード　定期入れ',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/marcoplus/cabinet/katespade/wallet/imgrc0081451504.jpg'
],
[
'id' =>14,
'gender' => 2,
'items' => 'スチームアイロン',
'story' => 'アイロン台を使わずにアイロンがけが出来るアイテム。ずっと欲しいと言っていたものを覚えてプレゼントしてくれた。',
'price' => 3000,
'kind' => 2,
'item_brand' => 'スチームアイロン',
'img_path'=>'https://tshop.r10s.jp/r-kojima/cabinet/280/3398807_01l.jpg'
],
[
'id' =>15,
'gender' => 2,
'items' => 'kate spadeの定期入れ',
'story' => '二十歳になった妹へ。可愛いけれど大人の物を使ってね♪',
'price' => 10000,
'kind' => 5,
'item_brand' => 'ケイトスペード　定期入れ',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/marcoplus/cabinet/katespade/wallet/imgrc0081451504.jpg'
],
[
'id' =>16,
'gender' => 2,
'items' => 'Starbucks Coffeeのカード',
'story' => 'いつも頑張っているご褒美にと突然仲のいい先輩がくれたプレゼント。ちょっと頑張った日には、このカードでおいしいフラペチーノでも飲んじゃおう。',
'price' => 1000,
'kind' => 2,
'item_brand' => 'スタバカード',
'img_path'=>'https://tshop.r10s.jp/mtony/cabinet/04010877/imgrc0066821483.jpg'
],
[
'id' =>17,
'gender' => 1,
'items' => 'ギターのピック',
'story' => 'いつも使っているスターウォーズのピックを持ち歩けるように！',
'price' => 1000,
'kind' => 5,
'item_brand' =>'ギター　ピック',
'img_path'=>'https://tshop.r10s.jp/chuya-online/cabinet/set5000/s4827.jpg'
],
[
'id' =>18,
'gender' => 1,
'items' => 'Knotの時計',
'story' => '恋人とのプレゼント交換では、あえて「これが欲しい！」ではなく、「あったらうれしいもの」をリクエスト。 自分に合うデザインなどを考えて選んでくれるのがうれしい。',
'price' => 15000,
'kind' => 4,
'item_brand' => 'ノット　時計',
'img_path'=>'https://tshop.r10s.jp/knot-watch/cabinet/face/cs-36rgwh.jpg'
],
[
'id' =>19,
'gender' => 2,
'items' => ' THREEのアイシャドウ',
'story' => '人気ブランドのコスメは間違いなし！さりげなくほしい色や似合う色を探してみると◎',
'price' => 5000,
'kind' => 3,
'item_brand' => 'THREE　アイシャドウ',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/blanc-lapin/cabinet/item/tre/trejs0500002.jpg'
],
[
'id' =>20,
'gender' => 2,
'items' => 'お花',
'story' => '就職祝いに幼馴染からお花のプレゼント。いつものようにご飯に行ったらサプライズで用意してくれてた。',
'price' => 1000,
'kind' => 2,
'item_brand' => '生花',
'img_path'=>'https://tshop.r10s.jp/noi-flower-regalo/cabinet/seikaarrange/seikaarrangeiowai/oiwai3/imgrc0070488969.jpg'
],
[
'id' =>21,
'gender' => 1,
'items' => '惑星ショコラ',
'story' => 'デザイン性のあるおしゃれなチョコレート。男友達へのバレンタインに',
'price' => 4000,
'kind' => 3,
'item_brand' => '惑星ショコラ',
'img_path'=>'https://tshop.r10s.jp/rihga/cabinet/leclat/lws-32_3.jpg'
],
[
'id' =>22,
'gender' => 2,
'items' => 'ワイヤレスイヤホン',
'story' => '実用性抜群！！とても嬉しかった！！！！',
'price' => 18000,
'kind' => 4,
'item_brand' => 'airpods',
'img_path'=>'https://tshop.r10s.jp/finebookpremiere/cabinet/imgrc0068961580.jpg'
],
[
'id' =>23,
'gender' => 1,
'items' => '名前入りのボールペン',
'story' => '相手の趣味が分からなくても、ビジネスで使えるものなら間違いなし！名前入りで特別感を',
'price' => 3000,
'kind' => 2,
'item_brand' => '名前入り ボールペン',
'img_path'=>'https://tshop.r10s.jp/bellevie-shop/cabinet/etc_image2/500etc0162sa1_1710.jpg'
],
[
'id' =>25,
'gender' => 1,
'items' => 'Paul Smithの名刺入れ',
'story' => '社会人には嬉しいプレゼント。いくつあっても嬉しいもの',
'price' => 10000,
'kind' => 4,
'item_brand' =>'ポールスミス　名刺入れ',
'img_path'=>'https://image.rakuten.co.jp/auc-season/cabinet/mens/menothers01/menpurse01/60-w1576_1.jpg'
],
[
'id' =>26,
'gender' => 2,
'items' => 'ヴィンテージのネックレス',
'story' => '母親が使っていたネックレスをもらった。新しいものをもらうのも嬉しいけど、思いのこもったものもうれしい。大切にしたい。',
'price' => 99999999,
'kind' => 5,
'item_brand' => 'ヴィンテージ　ネックレス',
'img_path'=>'https://tshop.r10s.jp/fairytale/cabinet/0913-17.jpg'
],
[
'id' =>27,
'gender' => 1,
'items' => 'PCに挟めるミニ扇風機',
'story' => '会社の先輩へ。これから夏だし、爽やかなものを♪',
'price' => 2000,
'kind' => 2,
'item_brand' => 'PC 扇風機',
'img_path'=>'https://tshop.r10s.jp/n-atoz/cabinet/pic13/13-8-n2/13-8-268_01.jpg'
],
[
'id' =>28,
'gender' => 2,
'items' => 'FURLAのバッグ',
'story' => 'バックはやっぱり実用性抜群だし、うれしい。今でも、毎日通勤で使ってます。',
'price' => 30000,
'kind' => 4,
'item_brand' => 'フルラ　バッグ',
'img_path'=>'https://image.rakuten.co.jp/x-sell/cabinet/newbag/1503/40517384.jpg'
],
[
'id' =>29,
'gender' => 2,
'items' => 'プリザーブドフラワー',
'story' => '最近引っ越した友人へ。小さくてもお家が華やかになるものを贈りたい',
'price' => 4000,
'kind' => 3,
'item_brand' => 'プリザーブドフラワー',
'img_path'=>'https://tshop.r10s.jp/snowball/cabinet/item4/a00154-02.jpg'
],
[
'id' =>30,
'gender' => 1,
'items' => 'PRADAのキーケース',
'story' => '普段はブランド物には疎い自分。いつもボロボロもキーケースを使っているのに気づいてくれた恋人があえてブランド物のキーケースを。とても嬉しかった。',
'price' => 20000,
'kind' => 4,
'item_brand' => 'プラダ　キーケース',
'img_path'=>'https://tshop.r10s.jp/bighit/cabinet/pr3/pro1pg222-o01-1.jpg'
],
[
'id' =>31,
'gender' => 2,
'items' => 'kate spadeのピアス',
'story' => 'Katespade好きな友達に、部活のみんなで協力してプレゼント！',
'price' => 8000,
'kind' => 2,
'item_brand' => 'ケイトスペード　ピアス',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/culture/cabinet/1702-pic21/ks-fo0ru1342-001_1.jpg'
],
[
'id' =>32,
'gender' => 1,
'items' => 'RALPH LAURENのキーホルダー',
'story' => '大学の卒業祝いに。自分のことを思って選んでくれたのがうれしい。',
'price' => 5000,
'kind' => 4,
'item_brand' => 'ラルフローレン　キーホルダー',
'img_path'=>'https://tshop.r10s.jp/slyder/cabinet/00764358/01404689/imgrc0071200109.jpg'
],
[
'id' =>33,
'gender' => 1,
'items' => 'バランスディスク',
'story' => '体を鍛えるのが好きな人にピッタリ！実際に使っている人の評判も◎',
'price' => 5000,
'kind' => 5,
'item_brand' => 'バランスディスク',
'img_path'=>'https://tshop.r10s.jp/jism/cabinet/0364/4986147327513.jpg'
],
[
'id' =>34,
'gender' => 2,
'items' => 'ハンカチ',
'story' => '大学の卒業祝いに。',
'price' => 1000,
'kind' => 2,
'item_brand' => 'ハンカチ　レディースhttps://tshop.r10s.jp/bugyo/cabinet/lezar/pen_10574.jpg?fitin=275:275',
'img_path'=>'https://tshop.r10s.jp/acrop/cabinet/05280295/imgrc0074988590.jpg'
],
[
'id' =>35,
'gender' => 2,
'items' => 'Paul Smithの定期入れ',
'story' => 'これから就活をする、Paul Smith好きな彼女へ。派手すぎず地味すぎないものが嬉しい！',
'price' => 20000,
'kind' => 4,
'item_brand' => 'ポールスミス　定期入れ　レディース',
'img_path'=>'https://image.rakuten.co.jp/inspiration/cabinet/2014-0421/pwu310-71a.jpg'
],
[
'id' =>36,
'gender' => 2,
'items' => 'PRADAの財布',
'story' => 'プレゼント選びは難しいから、一緒に買いに行くスタイル。ちょっと予算オーバーだったけど、買ってくれた。大切に使ってます。',
'price' => 35000,
'kind' => 4,
'item_brand' => 'プラダ　財布',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/brstring/cabinet/prada-2/gpr1ml522qhhf0002-1.jpg'
],
[
'id' =>37,
'gender' => 1,
'items' => 'adidasのスニーカー',
'story' => '履きつぶしたスニーカー、そろそろ替え時かも!?　こっそりサイズを調べてプレゼントしよう！',
'price' => 15000,
'kind' => 4,
'item_brand' => 'アディダス　スニーカー　メンズ',
'img_path'=>'https://image.rakuten.co.jp/kutsu-collection/cabinet/1/10/1002/10020325-1.jpg'
],
[
'id' =>38,
'gender' => 1,
'items' => '名前入りボールペン',
'story' => '仕事で使えるし、とっても気にしている。',
'price' => 3000,
'kind' => 2,
'item_brand' => '名前入りボールペン',
'img_path'=>'https://tshop.r10s.jp/bugyo/cabinet/lezar/pen_10574.jpg'
],
[
'id' =>39,
'gender' => 2,
'items' => 'Royal Copenhagenのマグカップ',
'story' => '初任給のプレゼントに♥英国ブランドで優雅なティータイムを！',
'price' => 7000,
'kind' => 5,
'item_brand' => 'ロイヤルコペンハーゲン　マグカップ',
'img_path'=>'https://tshop.r10s.jp/alevel/cabinet/royal/2381043.jpg'
],
[
'id' =>40,
'gender' => 1,
'items' => 'アルバム',
'story' => 'なんでもない日にアルバムのプレゼント。特別じゃない日のプレゼントってうれしい。',
'price' => 1000,
'kind' => 2,
'item_brand' => 'アルバム',
'img_path'=>'https://tshop.r10s.jp/zakkashop/cabinet/imagebox23/19564-1-s.jpg'
],
[
'id' =>41,
'gender' => 2,
'items' => 'ADDICTIONのコスメ',
'story' => '自分がもらっても嬉しいものをあげたい！おしゃれなコスメなら間違いなし',
'price' => 5000,
'kind' => 3,
'item_brand' => 'アディクション　コスメ',
'img_path'=>'https://tshop.r10s.jp/net-pumpkin/cabinet/70/4971710479270_1.jpg'
],
[
'id' =>42,
'gender' => 1,
'items' => 'カシミヤのマフラー',
'story' => '肌ざわりが最高な、冬にピッタリなプレゼント。長く使えて、温まる、そんなほっこりするアイテムを送れば、喜ばれること間違いない',
'price' => 6000,
'kind' => 4,
'item_brand' => 'カシミヤ　マフラー　メンズ',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/cashmee/cabinet/04054687/04169919/imgrc0068926416.jpg'
],
[
'id' =>43,
'gender' => 2,
'items' => 'DIESELのバッグ',
'story' => '男子に定番のディーゼルだけど、女子が持ってもかっこいい！',
'price' => 25000,
'kind' => 4,
'item_brand' =>'ディーゼル　バッグ レディース',
'img_path'=>'https://tshop.r10s.jp/auc-kiiroya-import/cabinet/801/die-l-a-80-120.jpg'
],
[
'id' =>44,
'gender' => 2,
'items' => 'Ane Moneのネックレス',
'story' => '仲が良い女友達からのプレゼントは、一生つけたい宝物！一味ちがうヴィンテージアイテムだと嬉しい♪',
'price' => 5000,
'kind' => 3,
'item_brand' => 'アネモネ　ネックレス',
'img_path'=>'https://tshop.r10s.jp/stylife/cabinet/item/854/u56854-01_1.jpg'
],
[
'id' =>45,
'gender' => 1,
'items' => '土屋鞄の財布',
'story' => '大人の恋人には、ちゃんとした物を贈りたい！シンプルで落ち着いたものを。',
'price' => 20000,
'kind' => 4,
'item_brand' => '土屋鞄　財布',
'img_path'=>'https://image.rakuten.co.jp/takuminowaza/cabinet/urbano/18ss/money-clip_top1.jpg'
],
[
'id' =>46,
'gender' => 1,
'items' => 'adidasのスニーカー',
'story' => 'おしゃれは足元から！こだわりたいスニーカーは、レアなコラボアイテムでサプライズ！',
'price' => 20000,
'kind' => 4,
'item_brand' => 'アディダス　スニーカー　メンズ',
'img_path'=>'https://tshop.r10s.jp/adidas/cabinet/201732w/bz0219-6.jpg'
],
[
'id' =>47,
'gender' => 1,
'items' => 'lacosteのベルト',
'story' => '高めのラコステだけど、ベルトは少しリーズナブル！さりげないおしゃれを楽しんで❤',
'price' => 7000,
'kind' => 4,
'item_brand' => 'ラコステ　ベルト',
'img_path'=>'https://image.rakuten.co.jp/richard/cabinet/lacoste/lb82670-top.jpg'
],
[
'id' =>48,
'gender' => 1,
'items' => 'TOMMY HILFIGERのTシャツ',
'story' => '何枚あっても困らないTシャツ。おしゃれ定番のブランドこそ、人からもらうと嬉しさ倍増！',
'price' => 5000,
'kind' => 2,
'item_brand' => 'トミー　Tシャツ',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/lakonect/cabinet/make/tommy-shirts042-09.jpg'
],
[
'id' =>49,
'gender' => 2,
'items' => 'Baccaratのペアグラス',
'story' => '初任給が入ったら！ちょっと良いペアグラスを両親へ。言葉にできない日頃の感謝を伝えよう',
'price' => 20000,
'kind' => 5,
'item_brand' => 'バカラ　ペアグラス',
'img_path'=>'https://tshop.r10s.jp/brandacross/cabinet/across-1/mille-ta-1.jpg'
],

]);
}
}