<?php

namespace App\Behaviors\Many;

use Orchid\Platform\Fields\Field;
use Orchid\Platform\Behaviors\Many;
use Orchid\Platform\Platform\Fields\TD;
use Orchid\Platform\Http\Forms\Posts\BasePostForm;
use Orchid\Platform\Http\Forms\Posts\UploadPostForm;


class About extends Many
{

    /**
     * @var string
     */
    public $name = 'About';

    /**
     * @var string
     */
    public $slug = 'about';

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
                ->title('Título')
                ->help('Qual o título do artigo?')
                ->placeholder('Digite o título do artigo'),

            Field::tag('textarea')
                ->name('descricao')
                ->rows(5)
                ->required()
                ->title('Descrição')
                ->help('Qual é a descrição do artigo?')
                ->placeholder('Digite a descrição do artigo'),

            Field::tag('picture')
                ->name('imagem')
                ->width(540)
                ->height(258)
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
