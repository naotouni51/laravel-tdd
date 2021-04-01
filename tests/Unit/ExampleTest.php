<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // 引数がtrueだとtrueを返す
        $this->assertTrue(true); //true
        // 引数がfalseだとfalseを返す
        $this->assertFalse(false); //true

        // 完全一致 (=== と同じ)
        $this->assertSame(1, 1); //true
        // 一致で型一致必要なし(== と同じ)
        $this->assertEquals(1, '1'); // true

        // キーの存在確認
        $this->assertArrayHasKey('body', ['header' => [], 'body' => []]); // true
        // 配列に含むか
        $this->assertContains('George', ['John', 'Paul', 'George', 'Ringo']); //true

        // 先頭部分一致
        $this->assertStringContainsString('hello', 'hello, world'); // true
        // 正規表現
        $this->assertMatchesRegularExpression('/\A私の名前は.+です。\z/', '私の名前はジョンです。'); //true
    }
}
