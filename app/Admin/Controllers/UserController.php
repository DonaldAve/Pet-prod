<?php

namespace App\Admin\Controllers;

use App\Models\Experience;
use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User controller';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('Имя'))->sortable();
        $grid->column('surname', __('Фамилия'))->sortable();
        $grid->column('position', __('Должность'))->sortable();
        $grid->column('description', __('О себе'))->sortable();
        $grid->column('interests', __('Интересы'))->sortable();
        $grid->column('image', __('Фото'))->image('/storage/');
        $grid->column('linkedin', __('Linkedin'))->sortable();
        $grid->column('telegram', __('Telegram'))->sortable();
        $grid->column('gitlab', __('Gitlab'))->sortable();
        $grid->column('github', __('Github'))->sortable();

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('name', __('Имя'));
        $show->field('surname', __('Фамилия'));
        $show->field('position', __('Должность'));
        $show->field('description', __('О себе'));
        $show->field('interests', __('Интересы'));
        $show->field('image', __('Фото'))->image('/storage/');
        $show->field('linkedin', __('Linkedin'));
        $show->field('telegram', __('Telegram'));
        $show->field('gitlab', __('Gitlab'));
        $show->field('github', __('Github'));
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->display('id', __('ID'));
        $form->text('name', __('Имя'));
        $form->text('surname', __('Фамилия'));
        $form->text('position', __('Должность'));
        $form->textarea('description', __('О себе'));
        $form->textarea('interests', __('Интересы'));
        $form->image('image', __('Фото'));
        $form->text('linkedin', __('Linkedin'));
        $form->text('telegram', __('Telegram'));
        $form->text('gitlab', __('Gitlab'));
        $form->text('github', __('Github'));

        return $form;
    }
}
