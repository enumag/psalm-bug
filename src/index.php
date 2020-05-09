<?php

/** @return \Amp\Promise<void> */
function test(): \Amp\Promise
{
    return \Amp\call(function (): Generator {
        yield from [];
    });
}

