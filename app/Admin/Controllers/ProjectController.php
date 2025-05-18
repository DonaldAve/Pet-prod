<?php

namespace App\Admin\Controllers;

use App\Models\Experience;
use App\Models\Project;
use App\Models\Technology;
use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProjectController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Project controller';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Project());

        $grid->column('id', __('ID'))->sortable();
        $grid->column('title', __('Название'))->sortable();
        $grid->column('description',('Описание'))->sortable();
        $grid->column('link', __('Ссылка'))->sortable();
        $grid->column('image', __('Картинка'))->image('/storage/');

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
        $show = new Show(Project::findOrFail($id));

        $show->field('id', __('ID'));
        $show->column('title', __('Название'));
        $show->column('description',('Описание'));
        $show->column('link', __('Ссылка'));
        $show->column('image', __('Картинка'))->image('/storage/');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Project());

        $form->text('title', __('Название'));
        $form->textarea('description',('Описание'));
        $form->text('link', __('Ссылка'));
        $form->image('image', __('Картинка'));


        return $form;
    }
}
