<?php

namespace App\Behaviors\Many;

use Orchid\Platform\Fields\Field;
use Orchid\Platform\Behaviors\Many;
use Orchid\Platform\Platform\Fields\TD;
use Orchid\Platform\Http\Forms\Posts\BasePostForm;
use Orchid\Platform\Http\Forms\Posts\UploadPostForm;


class BlogPost extends Many
{

    /**
     * @var string
     */
    public $name = 'BlogPost';

    /**
     * @var string
     */
    public $slug = 'blogpost';

    /**
     * Slug url /news/{name}.
     *
     * @var string
     */
    public $slugFields = 'titulo';

    /**
     * Rules Validation.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'content.*.titulo' => 'required|string',
            'content.*.data' => 'string',
            'content.*.descricao' => 'required|string',
        ];
    }

    /**
     * HTTP data filters
     *
     * @return array
     */
    public function filters() : array
    {
        return [];
    }

    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            Field::tag('input')
                ->type('text')
                ->name('titulo')
                ->max(255)
                ->required()
                ->title('Título'),

            Field::tag('datetime')
                ->type('text')
                ->name('data')
                ->title('Data'),

            Field::tag('textarea')
                ->name('descricao')
                ->rows(5)
                ->required()
                ->title('Descrição'),

            Field::tag('picture')
                ->name('imagem')
                ->width(512)
                ->height(249)
                ->title('Imagem'),
        ];
    }

    /**
     * Grid View for post type.
     */
    public function grid() : array
    {
        return [
            TD::name('titulo')->title('Título'),
            TD::name('status')->title('Estado'),
            TD::name('publish_at')->title('Publicado em'),
            TD::name('created_at')->title('Criado em'),
        ];
    }

    /**
     * @return array
     * @throws \Orchid\Platform\Exceptions\TypeException
     */
    public function modules() : array
    {
        return [
            BasePostForm::class,
            UploadPostForm::class,
        ];
    }
}
