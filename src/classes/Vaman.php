<?php
namespace Sentiment\classes;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class Vaman {

    public static function Sentiment($test){




       // $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijc3Y2I5ZDJmMzA0ODIzYjY2ZDRjOTgyN2JkOTVkOGEwZDRhN2I1YWUwMDJkMzZhM2RmYjY3YTkzNDJiODc3MTU2NWU2ZjViNDYwZDQ4YjFmIn0.eyJhdWQiOiI0IiwianRpIjoiNzdjYjlkMmYzMDQ4MjNiNjZkNGM5ODI3YmQ5NWQ4YTBkNGE3YjVhZTAwMmQzNmEzZGZiNjdhOTM0MmI4NzcxNTY1ZTZmNWI0NjBkNDhiMWYiLCJpYXQiOjE1NzEwMjk3MDEsIm5iZiI6MTU3MTAyOTcwMSwiZXhwIjoxNjAyNjUyMTAxLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.fxAf2vvVtjyUTWzWM7FWcLLnUD-8lKvyBLXvTNoRIAd7GU8Uh-UJ0aZFNNNdV6Z63452vHcHU58nHAAAAM3d_whd2KYou1iZz7K5BCrFQ0TCm7H7HJDWEcnOt2efwagy_hl2-4-JrwP426P4dCH_JZMSlxbc-FlEXZaY_Wp_aRq8_CkQsEGxM7vV4WXnd1YLI8vSADAHOAV-V8H513bYp1YnnwRpB5-JzZM24Kqi1IZ2Ac1DPX_C9Gnh1yNTIwZ3u_aPm41QzYL0kXiH__BbMI2H3JGRzrdVF9cKX14lbq9jARGfzts5ZB7PdLlVmo56f0egdco9MDEcxS7do4dnLkblwAUiHn30ptPfHV55CUZ-FFo-GlGR75S22xPNAsfJjbFQ8-hmC80C-qdZNK1qYU1fNIXYYOHR9rwf40JX14_7GTfxPN34fgX5AsgFuQk3dSOrb5TODpPM81yncXiEd0RP0lmdDwvZc5XH8puNz2Q3ddVWnW4LaLrEholerLmCEoq4637JfFtQEy8NEDYApWYR3EuZJezQFH1SkbBTrj5hHgnnpXRF5SH0dZlZQz9wBcxTP8avXQ9PiYD0ZXn-FW5GEuiygArvQUXymMuLwvA_jv2DC1hwN7BJmQU5DA_QCcXJSiizsETdsEqigej1SG8ipWbwpuifwUdhmuQwCIg';


        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImZlNDEwN2Q5NDZjNWRkMWI1NjhjODRhZTg5ZjE3NDNmODMyMDFiMGU0MTA2MTBlNTliYTA4MzI1ZWYxZTNkNGFkZGMyYzEzOTc1MDQwNTc4In0.eyJhdWQiOiI0IiwianRpIjoiZmU0MTA3ZDk0NmM1ZGQxYjU2OGM4NGFlODlmMTc0M2Y4MzIwMWIwZTQxMDYxMGU1OWJhMDgzMjVlZjFlM2Q0YWRkYzJjMTM5NzUwNDA1NzgiLCJpYXQiOjE1NzEyOTcyNjksIm5iZiI6MTU3MTI5NzI2OSwiZXhwIjoxNjAyOTE5NjY5LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.gG_Kw41c05DzAbbRfP7r27BzqQUtBw1k8n66rWOh7OLe9AqGqN5oHv2SsZIGYRPVoYLXoiaQzA4OFayJL0NvbLrsV9jjceaxWsB1-x_aIWK2AKyycb1LGqbKvCKuQCyq72HhJvYoJAev-OZ84C4ifj-PjqKebfYSLH1zjuhHhhHd2b_bNJ4EYu2L8kljKvOGEasxgY97VBQmnYcKeBsIJPCwSy6A-7CwLaQdV2uCxvafbmSh28qyfTAGw4dgboV9KT3I48PYo82CIQeT7hTVznrGkica4UIQcua6k8WYzhZ5c0ao8kB3XKUIlGbUWtW43Y6tvq2_FFW3rRoZytktKVaJp5cSnPkAx2ZCZA6gWwmlHbklMTiKDFBws-_BzAZ6NPHTniC8ecE3S6CMSwTAnCB2hIub5tsLKZh7JwrhgPvdqBO30CJRZ_lbuZxCbUrPFaYG6eKsUCgzvozkPtNq2MiQmqHrVaDW-ZcF1RQaI_QDl9I4cGgt2N7zUyH09R6DeipB3y9-GAN7nfd_iM7AqVx_FNg76XoQiYt8Xt8DnuQUnY0Di2quOZi3Tsb2ZprzsGxCAvpGs4VqiNL9qG0BH8DJqHEJbDhg1YQshArAQsbMlR8RgUFQ9O6bB9JxBGyxTJBvkRlk5Zal_Huc8Ss9jaS7RiiWwnjHkAmXjhl0KE8';

        $client = new Client();

        $URI = 'http://vaman.test/api/packages/sentiment';
        $params['headers'] = ['Content-Type' => 'application/json','accept' => 'application/json', 'Authorization' => 'Bearer ' . $token];
        $params['json'] = array('text' => 'I love you');

        $response = $client->post($URI, $params);


        return $response;
       dd($response);
    }

}