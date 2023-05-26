<?php

namespace App\Admin\Controllers;

use App\Models\Shop;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ShopController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Shop';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Shop());

        // $grid->disableCreateButton(); // 作成無効
        // $grid->disableFilter(); // 検索無効
        $grid->disableExport(); // ダウンロード無効
        $grid->disableRowSelector(); // 行セレクタ無効
        $grid->disableColumnSelector(); // 列セレクタ無効
        // $grid->disableActions(); // アクションカラムごと無効
        $grid->actions(function ($actions) {
            // $actions->disableDelete(); // 削除無効
            // $actions->disableEdit(); // 編集無効
            $actions->disableView(); // 詳細表示無効
            $actions->prepend('<a href="'.route('admin.shop-articles.index', ['shop_id'=>[$actions->getKey()]]).'" class="grid-row-view btn btn-sm btn-default"><i class="fa fa-newspaper-o"></i> 新着情報</a>'); // 追加のボタン例
        });

        // $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        // $grid->column('sort', __('Sort'));
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Shop::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('sort', __('Sort'));
        // $show->field('created_at', __('Created at'));
        // $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Shop());

        $id = request(strtolower('Shop'));
        $model = Shop::find($id);

        $form->tools(function (Form\Tools $tools){
            // $tools->disableList(); // リストに戻る無効
            $tools->disableView(); // 詳細表示無効
            // $tools->disableDelete(); //削除無効
        });
        $form->footer(function ($footer) {
            $footer->disableViewCheck(); // 詳細表示無効
            $footer->disableCreatingCheck(); // 続けて作成
            $footer->disableEditingCheck(); // 編集を続ける無効
            $footer->disableReset(); // リセット無効
            // $footer->disableSubmit(); // 送信無効
        });

        $form->text('name', __('Name'));
        $form->number('sort', __('Sort'));

        return $form;
    }
}
