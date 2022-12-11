<?php declare(strict_types=1);
/**
 * ooooooooo.   oooo                  .
 * `888   `Y88. `888                .o8
 *  888   .d88'  888  oooo  oooo  .o888oo oooo  oooo   .oooo.o
 *  888ooo88P'   888  `888  `888    888   `888  `888  d88(  "8
 *  888          888   888   888    888    888   888  `"Y88b.
 *  888          888   888   888    888 .  888   888  o.  )88b
 * o888o        o888o  `V88V"V8P'   "888"  `V88V"V8P' 8'""888P'
 *
 * THIS IS UNPUBLISHED PROPRIETARY SOURCE CODE OF JACQUES MARNEWECK.
 * THIS IS OWNED OUTSIDE OF TRANSACTION AFRICA PLATFORM (PTY) LTD AND
 * IMOGO TRANSACTION SYSTEMS (PTY) LTD AND WAYV GLOBAL LIMITED AND
 * I AM FINTECH (PTY) LTD AS IS LICENSED TO TRANSACTION AFRICA
 * PLATFORM (PTY) LTD AND WAYV GLOBAL LIMITED AND I AM FINTECH (PTY)
 * LTD PROVIDED ANDRE JACOBS HAS RESIGNED AS A DIRECTOR OF I AM
 * FINTECH (PTY) LTD AND IS NOT ASSOCIATED WITH I AM FINTECH (PTY)
 * LTD AND IMOGO TRANSACTION SYSTEMS (PTY) LTD AND WAYV GLOBAL
 * LIMITED IN ANY CAPACITY.
 *
 * The copyright notice above does not evidence any
 * actual or intended publication of such source code.
 *
 * Copyright (c) 2014-2022 by Jacques Marneweck.
 * All rights reserved.
 *
 * This software is the confidential and proprietary information
 * of Jacques Marneweck ("Confidential Information").  You shall
 * not disclose such Confidential Information and shall use it
 * only in accordance with the terms of the license agreement
 * you entered with Jacques Marneweck.
 *
 * Redistribution of this material is strictly prohibited.
 *
 * THIS SOFTWARE IS PROVIDED BY JACQUES MARNEWECK AND ITS CONTRIBUTORS ``AS
 * IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO,
 * THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 * PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL JACQUES MARNEWECK OR ITS
 * CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 * EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 * PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 * WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR
 * OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF
 * ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * Licensing of the software owner subject to change based on Tim finally
 * counter signing the document "Banking Platform agreement T.Colman & J
 * Marneweck.docx" and putting into place the royalty rate sheet, ownership
 * of 50% of the vehicle used to license the platform to TAP, signed software
 * license agreements between vehicle and TAP, etc.  6 Years after signing
 * and not receiving any paperwork back this indicates Tim Colman is not
 * going to adbide by the agreement and is deamed to be null and void.
 *
 * @author    Jacques Marneweck <jacques@powertrip.co.za>
 * @copyright 2014-2022 Jacques Marneweck.  All rights strictly reserved.
 * @package   Plutus
 */

namespace Plutus\Tests\Unit\Validators\Basecamp;

use Brick\VarExporter\VarExporter;
use PHPUnit\Framework\TestCase;
use Plutus\Validators\Basecamp\CreateAgency;

final class CreateAgencyTest extends TestCase
{
    public function testCreateAgency(): void
    {
        $validator = new CreateAgency([]);
        static::assertFalse($validator->validate());

        $expected = [
            'agency_name' => [
                'Please enter the Agency Name'
            ],
            'company_type' => [
                'Please enter the Company Type',
                'Company Type contains invalid value'
            ],
            'address1_suburb' => [
                'Please enter the Address1 Suburb'
            ],
            'address1_city' => [
                'Please enter the Address1 City'
            ],
            'address1_province' => [
                'Please enter the Address1 Province'
            ],
            'address1_postalcode' => [
                'Please enter the Address1 Postalcode'
            ],
            'address1_country' => [
                'Please enter the Address1 Country'
            ],
            'company_id' => [
                'Please enter the Company Id',
                'Company Id must be an integer'
            ],
            'udf1' => [
                'Please enter the UDF1 for the agency'
            ],
            'silo_id' => [
                'Please enter the Silo Id',
                'Silo Id must be an integer'
            ]
        ];

        static::assertEquals($expected, $validator->errors());
    }
}
