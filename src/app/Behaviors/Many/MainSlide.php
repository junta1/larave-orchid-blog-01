<?php

namespace App\Behaviors\Many;

use Orchid\Platform\Fields\Field;
use Orchid\Platform\Behaviors\Many;
use Orchid\Platform\Platform\Fields\TD;
use Orchid\Platform\Http\Forms\Posts\BasePostForm;
use Orchid\Platform\Http\Forms\Posts\UploadPostForm;


class MainSlide extends Many
{

    /**
     * @var string
     */
    public $name = 'MainSlide';

    /**
     * @var string
     */
    public $slug = 'mainslide';

    /**
     * Slug url /news/{name}.
     *
     * @var string
     */
    public $slugFields = 'imagem';

    /**
     * Rules Validation.
     *
     * @return array
     */
    public function rules() : array
    {
        return [];
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

            Field::tag('picture')
                ->name('imagem')
                ->width(512)
                ->height(249),
        ];
    }

    /**
     * Grid View for post type.
     */
    public function grid() : array
    {
        return [
            TD::name('imagem')->title('Imagem'),
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
