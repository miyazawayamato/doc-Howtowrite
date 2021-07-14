<?php
/**
 *
 * @access public
 * @author foo <hogehoge@example.com>
 * @copyright  hogehoge Corporation All Rights Reserved
 * @category for studying
 * //@package Controller
 */
class SimpleClass
{
    /**
     * [区分]クラスの概要
     *
     * クラスの詳細
     * 出来るだけ細かく書いたほうがよいが、詳細な説明は各メソッドに任せる。
     * 全体での共通ルールとか仕様を書く。
     *
     * @access アクセスレベル
     * @author 名前 <メールアドレス>
     * @copyright 会社名 All Rights Reserved
     * @category カテゴリー（処理系）
     * @package パッケージ（MVC）
     */
    
     
    // プロパティの宣言
    public $var = 'a default value';
    
    
    /**
     *  [区分]関数の概要
     *
     *  関数の詳細
     *  出来るかぎり細かく書く！でもシンプルに！（難しい）
     *
     * @access アクセスレベル
     * @param 型 パラメーター名（物理名） パラメーター型名（論理名）
     * @return 型 戻り値（物理名） 戻り値（論理名）
     * @see 関連（呼び出したり）する関数
     * @throws 例外についての記述
     * @todo 未対応（改善）事項等
     */
    public function displayVar() {
        echo $this->var;
        return 1;
    }
}
?>